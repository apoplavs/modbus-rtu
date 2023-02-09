<?php

declare(strict_types=1);

namespace HomeAutomation\Device\WP8026ADAM;

class WP8026 implements WP8026Interface
{
    public function __construct(
        readonly private int $di1,
        readonly private int $di2,
        readonly private int $di3,
        readonly private int $di4,
        readonly private int $di5,
        readonly private int $di6,
        readonly private int $di7,
        readonly private int $di8,
        readonly private int $di9,
        readonly private int $di10,
        readonly private int $di11,
        readonly private int $di12,
        readonly private int $di13,
        readonly private int $di14,
        readonly private int $di15,
        readonly private int $di16,
    )
    {
    }

    public function getDI1(): int
    {
        return $this->di1;
    }

    public function getDI2(): int
    {
        return $this->di2;
    }

    public function getDI3(): int
    {
        return $this->di3;
    }

    public function getDI4(): int
    {
        return $this->di4;
    }

    public function getDI5(): int
    {
        return $this->di5;
    }

    public function getDI6(): int
    {
        return $this->di6;
    }

    public function getDI7(): int
    {
        return $this->di7;
    }

    public function getDI8(): int
    {
        return $this->di8;
    }

    public function getDI9(): int
    {
        return $this->di9;
    }

    public function getDI10(): int
    {
        return $this->di10;
    }

    public function getDI11(): int
    {
        return $this->di11;
    }

    public function getDI12(): int
    {
        return $this->di12;
    }

    public function getDI13(): int
    {
        return $this->di13;
    }

    public function getDI14(): int
    {
        return $this->di14;
    }

    public function getDI15(): int
    {
        return $this->di15;
    }

    public function getDI16(): int
    {
        return $this->di16;
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