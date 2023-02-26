<?php

declare(strict_types=1);

namespace HomeAutomation\Device\WP8026ADAM;

class WP8026Factory
{
    public function createFromMbpollData(array $rawData): WP8026Interface
    {
        $data = $this->formatMbpollData($rawData);

        return new WP8026(
            $data[0] ?? 2,
            $data[1] ?? 2,
            $data[2] ?? 2,
            $data[3] ?? 2,
            $data[4] ?? 2,
            $data[5] ?? 2,
            $data[6] ?? 2,
            $data[7] ?? 2,
            $data[8] ?? 2,
            $data[9] ?? 2,
            $data[10] ?? 2,
            $data[11] ?? 2,
            $data[12] ?? 2,
            $data[13] ?? 2,
            $data[14] ?? 2,
            $data[15] ?? 2,
        );
    }

    private function formatMbpollData(array $rawData): array
    {
        $data = [];

        foreach ($rawData as $item) {
            $data[] = (int)substr($item, -1);
        }

        return $data;
    }
}
