<?php

namespace Alish\Telegram\Http\Controllers;

use Alish\Telegram\API\Message;
use Alish\Telegram\API\MessageEntity;
use Alish\Telegram\API\Update;
use Alish\Telegram\Events\FailedToParseUpdateFromTelegram;
use Alish\Telegram\Facades\Telegram;
use Alish\Telegram\Parser\Parser;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Collection;
use ReflectionClass;
use ReflectionException;

class TelegramController extends Controller
{
    /**
     * @var Collection
     */
    protected $getMiddlewareGroup;

    /**
     * bot.
     *
     * @var string
     */
    protected $bot;

    /**
     * @param string  $bot
     * @param Request $request
     *
     * @throws ReflectionException
     *
     * @return array
     */
    public function __invoke(string $bot, Request $request)
    {
        $this->bot = $bot;
        $update = $this->parseRequestToObject($request);
        $this->handle($update);

        return [
            'ok' => 'true',
        ];
    }

    /**
     * @param Request $request
     *
     * @throws ReflectionException
     *
     * @return Update
     */
    protected function parseRequestToObject(Request $request)
    {
        return Parser::parse(Update::class, $request->all());
    }

    protected function handle(Update $update)
    {
        return $this->handleMiddleware($update, $this->nextMiddleware());
    }

    /**
     * @param Update $update
     * @param string $middleware
     *
     * @return mixed
     */
    protected function handleMiddleware(Update $update, ?string $middleware)
    {
        if (!$middleware) {
            return $this->handleType($update);
        }

        $concrete = new $middleware();

        if (!method_exists($concrete, 'handle')) {
            $this->respondToMiddleware($update);
        }

        return $concrete->handle($update, function (Update $update) {
            return $this->respondToMiddleware($update);
        });
    }

    /**
     * @param Update $update
     *
     * @return bool|mixed|null
     */
    protected function respondToMiddleware(Update $update)
    {
        if ($middleware = $this->nextMiddleware()) {
            return $this->handleMiddleware($update, $this->nextMiddleware());
        }

        return $this->handleType($update);
    }

    /**
     * get next middleware.
     *
     * @return string|null
     */
    protected function nextMiddleware(): ?string
    {
        return $this->getMiddlewareGroup()->pop();
    }

    /**
     * @return Collection
     */
    protected function getMiddlewareGroup()
    {
        return $this->getMiddlewareGroup ?? $this->getMiddlewareGroup = new Collection(array_reverse(config('telegram.middleware',
                [])));
    }

    /**
     * @param Update $update
     *
     * @return bool|null
     */
    protected function handleType(Update $update)
    {
        [$type, $handler] = $this->getTypeOfUpdate($update);

        if (!$type) {
            return true;
        }

        if ($this->isCommandActive($type) && ($result = $this->handleCommand($update))) {
            return $result;
        }

        $concrete = new $handler($update);

        if (method_exists($concrete, 'handle')) {
            return $concrete->handle();
        }

        return true;
    }

    /**
     * @param Update $update
     *
     * @return array|null
     */
    protected function getTypeOfUpdate(Update $update): ?array
    {
        try {
            $reflection = new ReflectionClass($update);

            $properties = (new Collection($reflection->getProperties()))->map(function (\ReflectionProperty $property) {
                return $property->getName();
            })->toArray();

            $properties = array_diff($properties, ['update_id']);

            foreach ($properties as $property) {
                if (isset($update->$property)) {
                    return [$property, config("telegram.updates.$property", null)];
                }
            }
        } catch (ReflectionException $exception) {
            Telegram::dispatch(new FailedToParseUpdateFromTelegram($exception));
        }

        return null;
    }

    /**
     * is command active.
     *
     * @param string $type
     *
     * @return bool
     */
    protected function isCommandActive(string $type): bool
    {
        return config('telegram.commands.active', false) && $type === 'message';
    }

    /**
     * @param Update $update
     *
     * @return bool|null
     */
    protected function handleCommand(Update $update)
    {
        if ($command = $this->getBotCommand($update->getMessage())) {
            $concrete = new $command($update);

            if (method_exists($concrete, 'handle')) {
                return $concrete->handle();
            }
        }
    }

    /**
     * @param Message $message
     *
     * @return string|null
     */
    protected function getBotCommand(Message $message)
    {
        if ($entities = $message->getEntities()) {
            if ($this->isEntityBotCommand($entities[0])) {
                $command = substr($message->getText(), 1, $entities[0]->getLength());

                return config("telegram.commands.list.$command");
            }
        }
    }

    /**
     * @param MessageEntity $entity
     *
     * @return bool
     */
    protected function isEntityBotCommand(MessageEntity $entity)
    {
        return $this->entityIs($entity, 'bot_command') && $entity->getOffset() === 0;
    }

    /**
     * @param MessageEntity $entity
     * @param string        $type
     *
     * @return bool
     */
    protected function entityIs(MessageEntity $entity, string $type): bool
    {
        return $entity->getType() === $type;
    }
}
