<?php


namespace Alish\Telegram;

use GuzzleHttp\Client;
use GuzzleHttp\Promise\Promise;
use GuzzleHttp\Psr7\Response;
use Illuminate\Contracts\Events\Dispatcher;
use Illuminate\Support\Collection;

/**
 * Class Telegram
 * @package Alish\Telegram\Http
 *
 */
class Telegram
{

    /**
     * client for sending requests
     *
     * @var Client
     */
    protected $client;

    /**
     * client timeout to make a request
     *
     * @var int
     */
    protected $timeout = 30;

    /**
     * @var string
     */
    protected $bot;

    /**
     * whether request should be in sync mode or not
     *
     * @var boolean
     */
    protected $async;

    /**
     * chatId
     *
     * @var int
     */
    protected $chatId;

    /**
     * event dispatcher
     *
     * @var Dispatcher
     */
    protected $events;

    /**
     * request headers
     *
     * @var array
     */
    protected $headers = [
        'Accept' => 'application/json'
    ];

    /**
     * Telegram constructor.
     * @param  string|null  $token
     * @param  boolean  $async
     */
    public function __construct(string $token, bool $async)
    {
        $this->bot = $this->getBotName($token)['name'];

        $this->client = new Client([
            'base_uri' => $this->getBaseUrl($token),
            'timeout' => $this->timeout,
        ]);

        $this->async = $async;
    }

    /**
     * @param  string  $token
     * @return array
     */
    protected function getBotName(string $token) : array
    {
        return (new Collection(config('telegram.bots')))
            ->map(function ($bot, $name) {
                return ['name' => $name, 'bot' => $bot];
            })
            ->first(function ($bot) use ($token) {
                return $bot['bot']['token'] === $token;
            });
    }

    /**
     * set request to be async or not
     *
     * @param  bool  $async
     * @return self
     */
    public function async($async = true) : self
    {
        $this->async = $async;
        return $this;
    }

    public function __call($name, $arguments)
    {
        return $this->handleResponse($this->client->{$this->getMethod()}($name, [
            $this->typeOfRequest($arguments) => $this->getData($arguments),
            'headers' => $this->getHeaders()
        ]));
    }

    /**
     * @param  Response|Promise  $response
     * @return Promise|array
     */
    protected function handleResponse($response)
    {
        if ($response instanceof Promise) {
            $response->then(
                function (ResponseInterface $res) {
                    dump($res->getStatusCode() . "\n");
                },
                function (RequestException $e) {
                    dump($e->getMessage()."\n");
                    dump($e->getRequest()->getMethod());
                });

            return $response;
        }

        return \GuzzleHttp\json_decode($response->getBody(), true);
    }

    /**
     * @return string
     */
    protected function getMethod(): string
    {
//        return $this->async ? 'postAsync' : 'post';
        // we should find better async solution
        return 'post';
    }

    /**
     * @param  array  $arguments
     * @return string
     */
    protected function typeOfRequest(array $arguments) : string
    {
        if (!$arguments) {
            return 'json';
        }

        foreach ($arguments[0] as $key => $value) {
            if (gettype($value) === 'resource') {
                return 'multipart';
            }
        }

        return 'json';
    }

    /**
     * @param  array  $arguments
     * @return array|mixed
     */
    protected function getData(array $arguments): array
    {
        $data = [];

        if ($arguments) {
            $data = $arguments[0];
        }

        if ($this->chatId) {
            $data['chat_id'] = $this->chatId;
        }

        if ($this->typeOfRequest($arguments) === 'json') {
            return $data;
        }

        return (new Collection($data))->map(function ($value, $key) {
            return [
                'name' => $key,
                'contents' => $value
            ];
        })->ToArray();
    }

    /**
     * @return array
     */
    protected function getHeaders(): array
    {
        return $this->headers;
    }

    /**
     * @param  int  $chatId
     * @return self
     */
    public function chatId(int $chatId): self
    {
        $this->chatId = $chatId;
        return $this;
    }

    /**
     * @param $headers
     * @param  bool  $replace
     * @return self
     */
    public function addHeaders(array $headers, $replace = false): self
    {
        if ($replace) {
            $this->headers = $headers;
        } else {
            $this->headers = array_merge($this->headers, $headers);
        }

        return $this;
    }

    /**
     * get base url
     *
     * @param  string  $token
     * @return string
     */
    protected function getBaseUrl(string $token) : string
    {
        return "https://api.telegram.org/bot$token/";
    }

    /**
     * get current bot name
     *
     * @return string
     */
    public function bot() : string
    {
        return $this->bot;
    }

    /**
     * change bot
     *
     * @param  string  $bot
     * @return string
     */
    public function changeBot(string $bot) : string
    {
        $this->bot = $bot;

        $this->client = new Client([
            'baseUrl' => $this->getBaseUrl(config("telegram.bots.$bot")),
            'timeout' => $this->timeout
        ]);
    }

    /**
     * @param  Dispatcher  $events
     * @return Telegram
     */
    public function setEventDispatcher(Dispatcher $events) : self
    {
        $this->events = $events;
        return $this;
    }

    /**
     * @param $event
     * @return array|null
     */
    public function dispatch($event)
    {
        return $this->events->dispatch($event);
    }
}
