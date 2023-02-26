<?php

namespace HomeAutomation\MQTT;

use PhpMqtt\Client\ConnectionSettings;
use PhpMqtt\Client\Exceptions\ConfigurationInvalidException;
use PhpMqtt\Client\Exceptions\ConnectingToBrokerFailedException;
use PhpMqtt\Client\Exceptions\DataTransferException;
use PhpMqtt\Client\Exceptions\ProtocolNotSupportedException;
use PhpMqtt\Client\Exceptions\RepositoryException;
use PhpMqtt\Client\MqttClient as Client;
use Psr\Log\LoggerInterface;

class MQTTClient
{
    private Client $client;

    public function __construct(private readonly LoggerInterface $logger)
    {
        $mqttConnectionSettings = (new ConnectionSettings())->setUsername($_ENV['MQTT_USERNAME'])->setPassword($_ENV['MQTT_PASSWORD']);
        try {
            $this->client = new Client($_ENV['MQTT_SERVER_URL'], (int)$_ENV['MQTT_PORT'], $_ENV['MQTT_CLIENT_ID']);
            $this->client->connect($mqttConnectionSettings);
        } catch (ProtocolNotSupportedException|ConfigurationInvalidException $e) {
            $this->logger->error($e->getMessage(), $e->getTrace());
        } catch (ConnectingToBrokerFailedException $e) {
            $this->logger->error($e->getMessage(), (array)$e->getConnectionErrorMessage());
            exit(1);
        }
    }

    public function publish(string $topic, string $message): void
    {
        try {
//            $this->client->publish('php-mqtt/client/test/me/rt/24/r', 'Hello World!', 0);
            $this->client->publish($topic, $message);
        } catch (DataTransferException|RepositoryException $e) {
            $this->logger->error($e->getMessage(), $e->getTrace());
        }
    }

    public function disconnect(): void
    {
        try {
            $this->client->disconnect();
        } catch (DataTransferException $e) {
            $this->logger->warning('MQTT DataTransferException ', $e->getTrace());
        }
    }

    function __destruct()
    {
        $this->disconnect();
    }

}