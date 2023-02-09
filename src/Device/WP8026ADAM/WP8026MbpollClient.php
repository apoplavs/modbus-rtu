<?php

declare(strict_types=1);

namespace HomeAutomation\Device\WP8026ADAM;

use Psr\Log\LoggerInterface;

class WP8026MbpollClient
{
    public function __construct(private readonly LoggerInterface $logger, private readonly string $deviceName = '/dev/ttyUSB0')
    {
    }

    public function __invoke(): array
    {
        $data = [];

        exec('mbpoll -mrtu -b9600 -d8 -Pnone -s1 -t1 -a2 -c16 -1 ' . $this->deviceName . ' | grep ]:', $data);

        if (16 !== count($data)) {
            $this->logger->error(__CLASS__ . ' got not valid data', $data);
        }

        return $data;

    }

}