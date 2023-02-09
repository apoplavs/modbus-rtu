<?php

declare(strict_types=1);

namespace HomeAutomation\Device\WP8026ADAM;

class WP8026Factory
{
    public function createFromMbpollData(string $rawData): WP8026Interface
    {
        $data = $this->formatMbpollData($rawData);

        return new WP8026(
            $data[0],
            $data[1],
            $data[2],
            $data[3],
            $data[4],
            $data[5],
            $data[6],
            $data[7],
            $data[8],
            $data[9],
            $data[10],
            $data[11],
            $data[12],
            $data[13],
            $data[14],
            $data[15],
        );
    }

    private function formatMbpollData(string $rawData): array
    {

    }

}