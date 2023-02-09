<?php

declare(strict_types=1);

namespace HomeAutomation\Device\WP8026ADAM;

interface WP8026Interface
{
    public const OPEN_CLOSED = [
        0 => 'open',
        1 => 'closed',
    ];

    public const NC_MOTION = [
        0 => 'on',
        1 => 'off',
    ];

    public function getDI1(): int;

    public function getDI2(): int;

    public function getDI3(): int;

    public function getDI4(): int;

    public function getDI5(): int;

    public function getDI6(): int;

    public function getDI7(): int;

    public function getDI8(): int;

    public function getDI9(): int;

    public function getDI10(): int;

    public function getDI11(): int;

    public function getDI12(): int;

    public function getDI13(): int;

    public function getDI14(): int;

    public function getDI15(): int;

    public function getDI16(): int;

    public function toOpenClosed(int $val): string;

    public function toNcMotion(int $val): string;
}