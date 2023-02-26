<?php

declare(strict_types=1);

use Dotenv\Dotenv;
use HomeAutomation\Device\WP3066ADAM\WP3066Factory;
use HomeAutomation\Device\WP3066ADAM\WP3066MbpollClient;
use HomeAutomation\Device\WP3066ADAM\WP3066MQTTPublisher;
use HomeAutomation\Device\WP8026ADAM\WP8026Factory;
use HomeAutomation\Device\WP8026ADAM\WP8026MbpollClient;
use HomeAutomation\Device\WP8026ADAM\WP8026MQTTPublisher;
use HomeAutomation\MQTT\MQTTClient;
use HomeAutomation\Service\Logger;

require_once __DIR__ . '/vendor/autoload.php';

$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

$logger = new Logger($_ENV['LOG_FILE']);

// clients
$wp3066Client = new WP3066MbpollClient($logger);
$wp8026Client = new WP8026MbpollClient($logger);
$mqttClient = new MQTTClient($logger);

//factory
$wp8026Factory = new WP8026Factory();
$wp3066Factory = new WP3066Factory();

$wp8026 = $wp8026Factory->createFromMbpollData($wp8026Client());
// Publisher
$wp8026Publisher = new WP8026MQTTPublisher($wp8026, $mqttClient, $_ENV['WP8026_TOPIC_NAME']);
$wp8026Publisher->publish();

sleep(1);

$wp3066 = $wp3066Factory->createFromMbpollData($wp3066Client());
// Publisher
$wp3066Publisher = new WP3066MQTTPublisher($wp3066, $mqttClient, $_ENV['WP3066_TOPIC_NAME']);
$wp3066Publisher->publish();

sleep(1);

while (true) {
    for ($i = 0; $i < 3; $i++) {
        $wp8026 = $wp8026Factory->createFromMbpollData($wp8026Client());
        $wp8026Publisher->publishChanges($wp8026);
        sleep(1);
    }

    $wp3066 = $wp3066Factory->createFromMbpollData($wp3066Client());
    $wp3066Publisher->publishChanges($wp3066);
    sleep(1);
}
