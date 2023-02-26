<?php

declare(strict_types=1);

namespace HomeAutomation\Device\WP8026ADAM;

class WP8026 implements WP8026Interface
{
    public const DI_01_TYPE = WP8026ValueType::OpenClosed;

    public const DI_02_TYPE = WP8026ValueType::OpenClosed;

    public const DI_03_TYPE = WP8026ValueType::OpenClosed;

    public const DI_04_TYPE = WP8026ValueType::OpenClosed;

    public const DI_05_TYPE = WP8026ValueType::OpenClosed;

    public const DI_06_TYPE = WP8026ValueType::OpenClosed;

    public const DI_07_TYPE = WP8026ValueType::OpenClosed;

    public const DI_08_TYPE = WP8026ValueType::OpenClosed;

    public const DI_09_TYPE = WP8026ValueType::OpenClosed;

    public const DI_10_TYPE = WP8026ValueType::OpenClosed;

    public const DI_11_TYPE = WP8026ValueType::OpenClosed;

    public const DI_12_TYPE = WP8026ValueType::OpenClosed;

    public const DI_13_TYPE = WP8026ValueType::OpenClosed;

    public const DI_14_TYPE = WP8026ValueType::OpenClosed;

    public const DI_15_TYPE = WP8026ValueType::OpenClosed;

    public const DI_16_TYPE = WP8026ValueType::OpenClosed;


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

    public function getDI1(WP8026ValueType $type = WP8026ValueType::Default): int|string
    {
        return match ($type) {
            WP8026ValueType::Int => $this->di1,
            WP8026ValueType::OpenClosed => self::OPEN_CLOSED[$this->di1],
            WP8026ValueType::NCMotion => self::NC_MOTION[$this->di1],
            default => (string)$this->di1
        };
    }

    public function getDI2(WP8026ValueType $type = WP8026ValueType::Default): int|string
    {
        return match ($type) {
            WP8026ValueType::Int => $this->di2,
            WP8026ValueType::OpenClosed => self::OPEN_CLOSED[$this->di2],
            WP8026ValueType::NCMotion => self::NC_MOTION[$this->di2],
            default => (string)$this->di2
        };
    }

    public function getDI3(WP8026ValueType $type = WP8026ValueType::Default): int|string
    {
        return match ($type) {
            WP8026ValueType::Int => $this->di3,
            WP8026ValueType::OpenClosed => self::OPEN_CLOSED[$this->di3],
            WP8026ValueType::NCMotion => self::NC_MOTION[$this->di3],
            default => (string)$this->di3
        };
    }

    public function getDI4(WP8026ValueType $type = WP8026ValueType::Default): int|string
    {
        return match ($type) {
            WP8026ValueType::Int => $this->di4,
            WP8026ValueType::OpenClosed => self::OPEN_CLOSED[$this->di4],
            WP8026ValueType::NCMotion => self::NC_MOTION[$this->di4],
            default => (string)$this->di4
        };
    }

    public function getDI5(WP8026ValueType $type = WP8026ValueType::Default): int|string
    {
        return match ($type) {
            WP8026ValueType::Int => $this->di5,
            WP8026ValueType::OpenClosed => self::OPEN_CLOSED[$this->di5],
            WP8026ValueType::NCMotion => self::NC_MOTION[$this->di5],
            default => (string)$this->di5
        };
    }

    public function getDI6(WP8026ValueType $type = WP8026ValueType::Default): int|string
    {
        return match ($type) {
            WP8026ValueType::Int => $this->di6,
            WP8026ValueType::OpenClosed => self::OPEN_CLOSED[$this->di6],
            WP8026ValueType::NCMotion => self::NC_MOTION[$this->di6],
            default => (string)$this->di6
        };
    }

    public function getDI7(WP8026ValueType $type = WP8026ValueType::Default): int|string
    {
        return match ($type) {
            WP8026ValueType::Int => $this->di7,
            WP8026ValueType::OpenClosed => self::OPEN_CLOSED[$this->di7],
            WP8026ValueType::NCMotion => self::NC_MOTION[$this->di7],
            default => (string)$this->di7
        };
    }

    public function getDI8(WP8026ValueType $type = WP8026ValueType::Default): int|string
    {
        return match ($type) {
            WP8026ValueType::Int => $this->di8,
            WP8026ValueType::OpenClosed => self::OPEN_CLOSED[$this->di8],
            WP8026ValueType::NCMotion => self::NC_MOTION[$this->di8],
            default => (string)$this->di8
        };
    }

    public function getDI9(WP8026ValueType $type = WP8026ValueType::Default): int|string
    {
        return match ($type) {
            WP8026ValueType::Int => $this->di9,
            WP8026ValueType::OpenClosed => self::OPEN_CLOSED[$this->di9],
            WP8026ValueType::NCMotion => self::NC_MOTION[$this->di9],
            default => (string)$this->di9
        };
    }

    public function getDI10(WP8026ValueType $type = WP8026ValueType::Default): int|string
    {
        return match ($type) {
            WP8026ValueType::Int => $this->di10,
            WP8026ValueType::OpenClosed => self::OPEN_CLOSED[$this->di10],
            WP8026ValueType::NCMotion => self::NC_MOTION[$this->di10],
            default => (string)$this->di10
        };
    }

    public function getDI11(WP8026ValueType $type = WP8026ValueType::Default): int|string
    {
        return match ($type) {
            WP8026ValueType::Int => $this->di11,
            WP8026ValueType::OpenClosed => self::OPEN_CLOSED[$this->di11],
            WP8026ValueType::NCMotion => self::NC_MOTION[$this->di11],
            default => (string)$this->di11
        };
    }

    public function getDI12(WP8026ValueType $type = WP8026ValueType::Default): int|string
    {
        return match ($type) {
            WP8026ValueType::Int => $this->di12,
            WP8026ValueType::OpenClosed => self::OPEN_CLOSED[$this->di12],
            WP8026ValueType::NCMotion => self::NC_MOTION[$this->di12],
            default => (string)$this->di12
        };
    }

    public function getDI13(WP8026ValueType $type = WP8026ValueType::Default): int|string
    {
        return match ($type) {
            WP8026ValueType::Int => $this->di13,
            WP8026ValueType::OpenClosed => self::OPEN_CLOSED[$this->di13],
            WP8026ValueType::NCMotion => self::NC_MOTION[$this->di13],
            default => (string)$this->di13
        };
    }

    public function getDI14(WP8026ValueType $type = WP8026ValueType::Default): int|string
    {
        return match ($type) {
            WP8026ValueType::Int => $this->di14,
            WP8026ValueType::OpenClosed => self::OPEN_CLOSED[$this->di14],
            WP8026ValueType::NCMotion => self::NC_MOTION[$this->di14],
            default => (string)$this->di14
        };
    }

    public function getDI15(WP8026ValueType $type = WP8026ValueType::Default): int|string
    {
        return match ($type) {
            WP8026ValueType::Int => $this->di15,
            WP8026ValueType::OpenClosed => self::OPEN_CLOSED[$this->di15],
            WP8026ValueType::NCMotion => self::NC_MOTION[$this->di15],
            default => (string)$this->di15
        };
    }

    public function getDI16(WP8026ValueType $type = WP8026ValueType::Default): int|string
    {
        return match ($type) {
            WP8026ValueType::Int => $this->di16,
            WP8026ValueType::OpenClosed => self::OPEN_CLOSED[$this->di16],
            WP8026ValueType::NCMotion => self::NC_MOTION[$this->di16],
            default => (string)$this->di16
        };
    }
}
