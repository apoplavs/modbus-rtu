<?php

declare(strict_types=1);

namespace HomeAutomation\Device\WP3066ADAM;

class WP3066Factory
{
    private const NOT_CONNECTED_VALUE = 65535;

    private const OVER_0_VALUE = 10000;

    public function createFromMbpollData(array $rawData): WP3066Interface
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

    /**
     * A、If data = 65535, the temperature sensor is not connected
     * B、If data > 10000 and data < 65535, the temperature is below 0℃ TEMP = -(DATA-10000)/10
     * C、if data < 10000, the temperature is over 0℃ TEMP = DATA/10
     * @param array $rawData
     * @return array
     */
    private function formatMbpollData(array $rawData): array
    {
        $data = [];

        foreach ($rawData as $item) {
            $i = (int)substr($item, 5);

            // not connected
            if (self::NOT_CONNECTED_VALUE === $i) {
                $data[] = null;
                continue;
            }

            // temperature is over 0
            if ($i < self::OVER_0_VALUE) {
                $data[] = $i / 10;
                continue;
            }

            // temperature is below 0
            $data[] = (($i - self::OVER_0_VALUE) / 10) * -1;
        }

        return $data;

    }

}
