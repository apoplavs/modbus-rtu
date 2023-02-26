<?php

declare(strict_types=1);

namespace HomeAutomation\Device\WP3066ADAM;

use HomeAutomation\Device\WP3066ADAM\WP3066;
use HomeAutomation\Device\WP3066ADAM\WP3066Interface;
use HomeAutomation\MQTT\MQTTClient;

class WP3066MQTTPublisher
{
    private readonly string $topic;

    public function __construct(
        private WP3066Interface     $wp,
        private readonly MQTTClient $client,
        string                      $topic,
    )
    {
        $this->topic = rtrim($topic, '/');
    }


    public function publish(): void
    {
        if (null !== $this->wp->getTemperature1()) {
            $this->client->publish($this->topic . '/t1', (string)$this->wp->getTemperature1());
        }

        if (null !== $this->wp->getTemperature2()) {
            $this->client->publish($this->topic . '/t2', (string)$this->wp->getTemperature2());
        }

        if (null !== $this->wp->getTemperature3()) {
            $this->client->publish($this->topic . '/t3', (string)$this->wp->getTemperature3());
        }

        if (null !== $this->wp->getTemperature4()) {
            $this->client->publish($this->topic . '/t4', (string)$this->wp->getTemperature4());
        }

        if (null !== $this->wp->getTemperature5()) {
            $this->client->publish($this->topic . '/t5', (string)$this->wp->getTemperature5());
        }

        if (null !== $this->wp->getTemperature6()) {
            $this->client->publish($this->topic . '/t6', (string)$this->wp->getTemperature6());
        }

        if (null !== $this->wp->getTemperature7()) {
            $this->client->publish($this->topic . '/t7', (string)$this->wp->getTemperature7());
        }

        if (null !== $this->wp->getTemperature8()) {
            $this->client->publish($this->topic . '/t8', (string)$this->wp->getTemperature8());
        }
    }

    public function publishChanges(WP3066Interface $newWP): void
    {
        $changes = false;

        if (null !== $this->wp->getTemperature1() && $this->wp->getTemperature1() !== $newWP->getTemperature1()) {
            $this->client->publish($this->topic . '/t1', (string)$newWP->getTemperature1());
            $changes = true;
        }

        if (null !== $this->wp->getTemperature2() && $this->wp->getTemperature2() !== $newWP->getTemperature2()) {
            $this->client->publish($this->topic . '/t2', (string)$newWP->getTemperature2());
            $changes = true;
        }

        if (null !== $this->wp->getTemperature3() && $this->wp->getTemperature3() !== $newWP->getTemperature3()) {
            $this->client->publish($this->topic . '/t3', (string)$newWP->getTemperature3());
            $changes = true;
        }

        if (null !== $this->wp->getTemperature4() && $this->wp->getTemperature4() !== $newWP->getTemperature4()) {
            $this->client->publish($this->topic . '/t4', (string)$newWP->getTemperature4());
            $changes = true;
        }

        if (null !== $this->wp->getTemperature5() && $this->wp->getTemperature5() !== $newWP->getTemperature5()) {
            $this->client->publish($this->topic . '/t5', (string)$newWP->getTemperature5());
            $changes = true;
        }

        if (null !== $this->wp->getTemperature6() && $this->wp->getTemperature6() !== $newWP->getTemperature6()) {
            $this->client->publish($this->topic . '/t6', (string)$newWP->getTemperature6());
            $changes = true;
        }

        if (null !== $this->wp->getTemperature7() && $this->wp->getTemperature7() !== $newWP->getTemperature7()) {
            $this->client->publish($this->topic . '/t7', (string)$newWP->getTemperature7());
            $changes = true;
        }

        if (null !== $this->wp->getTemperature8() && $this->wp->getTemperature8() !== $newWP->getTemperature8()) {
            $this->client->publish($this->topic . '/t8', (string)$newWP->getTemperature8());
            $changes = true;
        }

        if (true === $changes) {
            $this->wp = clone $newWP;
        }
    }
}
