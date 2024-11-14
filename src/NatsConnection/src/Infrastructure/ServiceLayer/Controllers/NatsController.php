<?php

namespace NatsConnection\Infrastructure\ServiceLayer\Controllers;

use Basis\Nats\Message\Payload;
use Kernel\Infrastructure\Controllers\BaseController;
use Basis\Nats\Client;
use Basis\Nats\Configuration;

class NatsController extends BaseController
{
    public function getNats()
    {
        $configuration = new Configuration([
            'host' => 'nats-server',
            'jwt' => null,
            'lang' => 'php',
            'pass' => null,
            'pedantic' => false,
            'port' => 4222,
            'reconnect' => true,
            'timeout' => 1,
            'token' => "s3cr3t",
            'user' => null,
            'nkey' => null,
            'verbose' => false,
            'version' => 'dev',
        ]);

        // default delay mode is constant - first retry be in 1ms, second in 1ms, third in 1ms
//        $configuration->setDelay(0.001);
//
//        // linear delay mode - first retry be in 1ms, second in 2ms, third in 3ms, fourth in 4ms, etc...
//        $configuration->setDelay(0.001, Configuration::DELAY_LINEAR);
//
//        // exponential delay mode - first retry be in 10ms, second in 100ms, third in 1s, fourth if 10 seconds, etc...
//        $configuration->setDelay(0.01, Configuration::DELAY_EXPONENTIAL);


        $client = new Client($configuration);
//        $client->ping(); // true

        $payload = new Payload('tester', [
            'Nats-Msg-Id' => 'payload-example'
        ]);

        $client->publish('hello', $payload);

//        $client->dispatch('hello.request', 'Nekufa2');

        return $this->execWithJsonResponse(function () {
            return [
                "message" => "success",
            ];
        });
    }
}
