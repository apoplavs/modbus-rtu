<?php

namespace HomeAutomation\Device\WP3066ADAM;

interface WP3066Interface
{
    public function getTemperature1(): ?float;

    public function getTemperature2(): ?float;

    public function getTemperature3(): ?float;

    public function getTemperature4(): ?float;

    public function getTemperature5(): ?float;

    public function getTemperature6(): ?float;

    public function getTemperature7(): ?float;

    public function getTemperature8(): ?float;

    public function toOpenClosed(int $val): string;

    public function toNcMotion(int $val): string;
}