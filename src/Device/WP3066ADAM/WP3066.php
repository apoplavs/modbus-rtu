<?php

declare(strict_types=1);

namespace HomeAutomation\Device\WP3066ADAM;

class WP3066 implements WP3066Interface
{
    public function __construct(
        readonly private ?float $temperature1,
        readonly private ?float $temperature2,
        readonly private ?float $temperature3,
        readonly private ?float $temperature4,
        readonly private ?float $temperature5,
        readonly private ?float $temperature6,
        readonly private ?float $temperature7,
        readonly private ?float $temperature8,

    )
    {
    }

    public function getTemperature1(): ?float
    {
        return $this->temperature1;
    }

    public function getTemperature2(): ?float
    {
        return $this->temperature2;
    }

    public function getTemperature3(): ?float
    {
        return $this->temperature3;
    }

    public function getTemperature4(): ?float
    {
        return $this->temperature4;
    }

    public function getTemperature5(): ?float
    {
        return $this->temperature5;
    }

    public function getTemperature6(): ?float
    {
        return $this->temperature6;
    }

    public function getTemperature7(): ?float
    {
        return $this->temperature7;
    }

    public function getTemperature8(): ?float
    {
        return $this->temperature8;
    }

    public function toOpenClosed(int $val): string
    {
        return self::OPEN_CLOSED[$val];
    }

    public function toNcMotion(int $val): string
    {
        return self::NC_MOTION[$val];
    }

}