<?php

declare(strict_types=1);

namespace HomeAutomation\Device\WP3066ADAM;

use Psr\Log\LoggerInterface;

class WP3066MbpollClient
{
    public function __construct(private readonly LoggerInterface $logger, private readonly string $deviceName = '/dev/ttyUSB0')
    {
    }

    public function __invoke(): array
    {
        $data = [];

        exec('mbpoll -mrtu -b9600 -d8 -Pnone -s1 -t3 -c8 -1 ' . $this->deviceName . ' | grep ]:', $data);

        if (8 !== count($data)) {
            $this->logger->error(__CLASS__ . ' got not valid data', $data);
        }

        return $data;

    }

}