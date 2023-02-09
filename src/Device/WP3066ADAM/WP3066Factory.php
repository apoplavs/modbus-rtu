<?php

declare(strict_types=1);

namespace HomeAutomation\Device\WP3066ADAM;

class WP3066Factory
{
    public function createFromMbpollData(string $rawData): WP3066Interface
    {
        $data = $this->formatMbpollData($rawData);

        return new WP3066(
            $data[0],
            $data[1],
            $data[2],
            $data[3],
            $data[4],
            $data[5],
            $data[6],
            $data[7],
        );
    }

    private function formatMbpollData(string $rawData): array
    {

    }

}