<?php

declare(strict_types=1);

namespace HomeAutomation\Device\WP8026ADAM;

use HomeAutomation\MQTT\MQTTClient;

class WP8026MQTTPublisher
{
    private readonly string $topic;

    public function __construct(
        private WP8026Interface     $wp,
        private readonly MQTTClient $client,
        string                      $topic,
    )
    {
        $this->topic = rtrim($topic, '/');
    }


    public function publish(): void
    {
        $this->client->publish($this->topic . '/DI_01', $this->wp->getDI1(WP8026::DI_01_TYPE));
        $this->client->publish($this->topic . '/DI_02', $this->wp->getDI2(WP8026::DI_02_TYPE));
        $this->client->publish($this->topic . '/DI_03', $this->wp->getDI3(WP8026::DI_03_TYPE));
        $this->client->publish($this->topic . '/DI_04', $this->wp->getDI4(WP8026::DI_04_TYPE));
        $this->client->publish($this->topic . '/DI_05', $this->wp->getDI5(WP8026::DI_05_TYPE));
        $this->client->publish($this->topic . '/DI_06', $this->wp->getDI6(WP8026::DI_06_TYPE));
        $this->client->publish($this->topic . '/DI_07', $this->wp->getDI7(WP8026::DI_07_TYPE));
        $this->client->publish($this->topic . '/DI_08', $this->wp->getDI8(WP8026::DI_08_TYPE));;
        $this->client->publish($this->topic . '/DI_09', $this->wp->getDI9(WP8026::DI_09_TYPE));
        $this->client->publish($this->topic . '/DI_010', $this->wp->getDI10(WP8026::DI_10_TYPE));
        $this->client->publish($this->topic . '/DI_011', $this->wp->getDI11(WP8026::DI_11_TYPE));
        $this->client->publish($this->topic . '/DI_012', $this->wp->getDI12(WP8026::DI_12_TYPE));
        $this->client->publish($this->topic . '/DI_013', $this->wp->getDI13(WP8026::DI_13_TYPE));
        $this->client->publish($this->topic . '/DI_014', $this->wp->getDI14(WP8026::DI_14_TYPE));
        $this->client->publish($this->topic . '/DI_015', $this->wp->getDI15(WP8026::DI_15_TYPE));
        $this->client->publish($this->topic . '/DI_016', $this->wp->getDI16(WP8026::DI_16_TYPE));

    }

    public function publishChanges(WP8026Interface $newWP): void
    {
        $changes = false;

        if ($this->wp->getDI1(WP8026ValueType::Int) !== $newWP->getDI1(WP8026ValueType::Int)) {
            $this->client->publish($this->topic . '/DI_01', $newWP->getDI1(WP8026::DI_01_TYPE));
            $changes = true;
        }

        if ($this->wp->getDI2(WP8026ValueType::Int) !== $newWP->getDI2(WP8026ValueType::Int)) {
            $this->client->publish($this->topic . '/DI_02', $newWP->getDI2(WP8026::DI_02_TYPE));
            $changes = true;
        }

        if ($this->wp->getDI3(WP8026ValueType::Int) !== $newWP->getDI3(WP8026ValueType::Int)) {
            $this->client->publish($this->topic . '/DI_03', $newWP->getDI3(WP8026::DI_03_TYPE));
            $changes = true;
        }

        if ($this->wp->getDI4(WP8026ValueType::Int) !== $newWP->getDI4(WP8026ValueType::Int)) {
            $this->client->publish($this->topic . '/DI_04', $newWP->getDI4(WP8026::DI_04_TYPE));
            $changes = true;
        }

        if ($this->wp->getDI5(WP8026ValueType::Int) !== $newWP->getDI5(WP8026ValueType::Int)) {
            $this->client->publish($this->topic . '/DI_05', $newWP->getDI5(WP8026::DI_05_TYPE));
            $changes = true;
        }

        if ($this->wp->getDI6(WP8026ValueType::Int) !== $newWP->getDI6(WP8026ValueType::Int)) {
            $this->client->publish($this->topic . '/DI_06', $newWP->getDI6(WP8026::DI_06_TYPE));
            $changes = true;
        }

        if ($this->wp->getDI7(WP8026ValueType::Int) !== $newWP->getDI7(WP8026ValueType::Int)) {
            $this->client->publish($this->topic . '/DI_07', $newWP->getDI7(WP8026::DI_07_TYPE));
            $changes = true;
        }

        if ($this->wp->getDI8(WP8026ValueType::Int) !== $newWP->getDI8(WP8026ValueType::Int)) {
            $this->client->publish($this->topic . '/DI_08', $newWP->getDI8(WP8026::DI_08_TYPE));
            $changes = true;
        }

        if ($this->wp->getDI9(WP8026ValueType::Int) !== $newWP->getDI9(WP8026ValueType::Int)) {
            $this->client->publish($this->topic . '/DI_09', $newWP->getDI9(WP8026::DI_09_TYPE));
            $changes = true;
        }

        if ($this->wp->getDI10(WP8026ValueType::Int) !== $newWP->getDI10(WP8026ValueType::Int)) {
            $this->client->publish($this->topic . '/DI_10', $newWP->getDI10(WP8026::DI_10_TYPE));
            $changes = true;
        }

        if ($this->wp->getDI11(WP8026ValueType::Int) !== $newWP->getDI11(WP8026ValueType::Int)) {
            $this->client->publish($this->topic . '/DI_11', $newWP->getDI11(WP8026::DI_11_TYPE));
            $changes = true;
        }

        if ($this->wp->getDI12(WP8026ValueType::Int) !== $newWP->getDI12(WP8026ValueType::Int)) {
            $this->client->publish($this->topic . '/DI_12', $newWP->getDI12(WP8026::DI_12_TYPE));
            $changes = true;
        }

        if ($this->wp->getDI13(WP8026ValueType::Int) !== $newWP->getDI13(WP8026ValueType::Int)) {
            $this->client->publish($this->topic . '/DI_13', $newWP->getDI13(WP8026::DI_13_TYPE));
            $changes = true;
        }

        if ($this->wp->getDI14(WP8026ValueType::Int) !== $newWP->getDI14(WP8026ValueType::Int)) {
            $this->client->publish($this->topic . '/DI_14', $newWP->getDI14(WP8026::DI_14_TYPE));
            $changes = true;
        }

        if ($this->wp->getDI15(WP8026ValueType::Int) !== $newWP->getDI15(WP8026ValueType::Int)) {
            $this->client->publish($this->topic . '/DI_15', $newWP->getDI15(WP8026::DI_15_TYPE));
            $changes = true;
        }

        if ($this->wp->getDI16(WP8026ValueType::Int) !== $newWP->getDI16(WP8026ValueType::Int)) {
            $this->client->publish($this->topic . '/DI_16', $newWP->getDI16(WP8026::DI_16_TYPE));
            $changes = true;
        }

        if (true === $changes) {
            $this->wp = clone $newWP;
        }

    }
}
