<?php

namespace Alish\Telegram;

use GuzzleHttp\Client;
use GuzzleHttp\Promise\Promise;
use GuzzleHttp\Psr7\Response;
use Illuminate\Support\Collection;

/**
 * Class Telegram.
 */
class Telegram
{
    /**
     * client for sending requests.
     *
     * @var Client
     */
    protected $client;

    /**
     * whether request should be in sync mode or not.
     *
     * @var bool
     */
    protected $async;

    /**
     * chatId.
     *
     * @var string
     */
    protected $chatId;

    /**
     * request headers.
     *
     * @var array
     */
    protected $headers = [
        'Accept' => 'application/json',
    ];

    /**
     * Telegram constructor.
     *
     * @param string|null $token
     * @param bool        $async
     */
    public function __construct(string $token, bool $async)
    {
        $this->client = new Client([
            'base_uri' => "https://api.telegram.org/bot$token/",
            'timeout'  => 30,
        ]);

        $this->async = $async;
    }

    /**
     * set request to be async or not.
     *
     * @param bool $async
     */
    public function async($async = true)
    {
        $this->async = $async;
    }

    public function __call($name, $arguments)
    {
        return $this->handleResponse($this->client->{$this->getMethod()}($name, [
            $this->typeOfRequest($arguments) => $this->getData($arguments),
            'headers'                        => $this->getHeaders(),
        ]));
    }

    /**
     * @param Response|Promise $response
     *
     * @return Promise|array
     */
    protected function handleResponse($response)
    {
        if ($response instanceof Promise) {
            return $response;
        }

        return \GuzzleHttp\json_decode($response->getBody(), true);
    }

    /**
     * @return string
     */
    protected function getMethod(): string
    {
        return $this->async ? 'postAsync' : 'post';
    }

    /**
     * @param array $arguments
     *
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
     * @param array $arguments
     *
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

        return (new Collection($data))->map(function ($key, $value) {
            return [
                'name'  => $key,
                'value' => $value,
            ];
        });
    }

    /**
     * @return array
     */
    protected function getHeaders(): array
    {
        return $this->headers;
    }

    /**
     * @param string $chatId
     *
     * @return string
     */
    public function chatId(string $chatId): string
    {
        $this->chatId = $chatId;
    }

    /**
     * @param $headers
     * @param bool $replace
     *
     * @return array
     */
    public function addHeaders(array $headers, $replace = false): array
    {
        if ($replace) {
            return $this->headers = $headers;
        }

        return $this->headers = array_merge($this->headers, $headers);
    }
}
