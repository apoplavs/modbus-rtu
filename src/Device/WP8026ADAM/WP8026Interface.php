<?php

declare(strict_types=1);

namespace HomeAutomation\Device\WP8026ADAM;

interface WP8026Interface
{
    public const OPEN_CLOSED = [
        0 => 'open',
        1 => 'closed',
        2 => 'undefined',
    ];

    public const NC_MOTION = [
        0 => 'on',
        1 => 'off',
        2 => 'undefined',
    ];

    public function getDI1(WP8026ValueType $type = WP8026ValueType::Default): int|string;

    public function getDI2(WP8026ValueType $type = WP8026ValueType::Default): int|string;

    public function getDI3(WP8026ValueType $type = WP8026ValueType::Default): int|string;

    public function getDI4(WP8026ValueType $type = WP8026ValueType::Default): int|string;

    public function getDI5(WP8026ValueType $type = WP8026ValueType::Default): int|string;

    public function getDI6(WP8026ValueType $type = WP8026ValueType::Default): int|string;

    public function getDI7(WP8026ValueType $type = WP8026ValueType::Default): int|string;

    public function getDI8(WP8026ValueType $type = WP8026ValueType::Default): int|string;

    public function getDI9(WP8026ValueType $type = WP8026ValueType::Default): int|string;

    public function getDI10(WP8026ValueType $type = WP8026ValueType::Default): int|string;

    public function getDI11(WP8026ValueType $type = WP8026ValueType::Default): int|string;

    public function getDI12(WP8026ValueType $type = WP8026ValueType::Default): int|string;

    public function getDI13(WP8026ValueType $type = WP8026ValueType::Default): int|string;

    public function getDI14(WP8026ValueType $type = WP8026ValueType::Default): int|string;

    public function getDI15(WP8026ValueType $type = WP8026ValueType::Default): int|string;

    public function getDI16(WP8026ValueType $type = WP8026ValueType::Default): int|string;
}