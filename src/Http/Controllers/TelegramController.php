<?php

namespace Alish\Telegram\Http\Controllers;


use Alish\Telegram\API\Update;
use Alish\Telegram\Exception\NoTelegramHandlerFoundException;
use Alish\Telegram\Facades\Telegram;
use Alish\Telegram\Model\TelegramUpdate;
use Alish\Telegram\Parser\DocBlockParser;
use Alish\Telegram\Parser\Parser;
use Alish\Telegram\TelegramCommand;
use Alish\Telegram\TelegramLoader;
use Alish\Telegram\TelegramUpdateHandler;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class TelegramController extends BaseController
{
    private $docBlockParser;

    public function __construct()
    {
        $this->docBlockParser = new DocBlockParser();
    }

    public function __invoke(Request $request)
    {

        $inputs = $request->all();
        $update = Parser::parse(Update::class, $inputs);

        if($this->isNewRequest($update)) {
            $this->handleRequest($update);
            $this->saveRequest($update, $inputs);

        }

        return response('', 200);

    }

    private function isNewRequest(Update $update)
    {
        $update_id = $update->getUpdateId();
        $didFind = TelegramUpdate::where('update_id', $update_id)->first();
        return $didFind === null;
    }

    private function saveRequest(Update $update, $inputs)
    {
        TelegramUpdate::create([
            'update_id' => $update->getUpdateId(),
            'result' => json_encode($inputs)
        ]);
    }

    private function getUpdateType(Update $update)
    {
        $reflection = new \ReflectionClass($update);
        $properties = $reflection->getProperties();
        foreach ($properties as $property) {
            if ($this->docBlockParser->isNullable($property)) {
                $key = $property->getName();
                $getter = $this->docBlockParser->getGetter($key);
                if ($update->$getter()) {
                    return [
                        'key' => studly_case($key),
                        'type' => $this->docBlockParser->getTypeOfProperty($property)
                    ];
                }
            }
        }

        return null;
    }

    private function handleRequest(Update $update)
    {
        $type = $this->getUpdateType($update);
        $this->setUser($update, $type['type']);

        $this->load($update);

        $handler = $this->getHandlerInstance($type['type'], $update);

        if ($this->isCommandActive()) {
            if ($type['key'] === 'Message') {
                if ($command = $this->commandHandler($update)) {
                    if (class_exists($command)) {
                        $message = $update->getMessage();
                        $class = new $command($message);
                        if ($class instanceof TelegramCommand) {
                            $class->handler();
                            return;
                        }
                    }
                }
            }
        }

        if ($handler) {
            $handler->handler();
        }
        else {
            throw new NoTelegramHandlerFoundException();
        }

    }

    private function commandHandler(Update $update)
    {
        $message = $update->getMessage();
        $text = $message->getText();

        if ($entities = $message->getEntities()) {

            if (count($entities) === 1) {
                $entity = $entities[0];
                $type = $entity->getType();

                if ($type === "bot_command") {
                    $offset = $entity->getOffset();
                    $length = $entity->getLength();
                    $command = substr($text, $offset + 1, $length);
                    return config('telegram.commands.list.' . $command);
                }

            }

        }

        return null;
    }

    private function getHandler($type)
    {
        return config('telegram.handlers.' . $type, null);
    }

    private function isCommandActive()
    {
        return config('telegram.commands.active', false);
    }

    private function getHandlerInstance($type, $update)
    {
        $handler = $this->getHandler($type);
        if (class_exists($handler)) {
            $instance = new $handler($update);
            if ($instance instanceof TelegramUpdateHandler) {
                return $instance;
            }
        }

        return null;

    }

    private function setUser($update, $type)
    {

        $method = 'get' . studly_case($type);
        $result = $update->$method();
        Telegram::setUser($result->getFrom());
    }

    private function load(Update $update)
    {
        $loaders = config('telegram.loaders', []);
        foreach ($loaders as $loader) {
            if (class_exists($loader)) {
                $loaderInstance = new $loader($update);
                if ($loaderInstance instanceof TelegramLoader) {
                    $loaderInstance->process();
                }
            }
        }
    }

}