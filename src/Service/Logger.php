<?php

namespace HomeAutomation\Service;

use DateTime;
use DateTimeInterface;
use Psr\Log\AbstractLogger;
use Psr\Log\LoggerInterface;
use Stringable;

class Logger extends AbstractLogger implements LoggerInterface
{
    public string $template = "{date} {level} {message} {context}";

    public function __construct(private readonly string $filePath)
    {
        if (!file_exists($this->filePath)) {
            touch($this->filePath);
        }
    }

    public function log($level, Stringable|string $message, array $context = []): void
    {
        file_put_contents($this->filePath, trim(strtr($this->template, [
                '{date}' => '[' . $this->getDate() . ']',
                '{level}' => strtoupper($level),
                '{message}' => $message,
                '{context}' => $this->contextStringify($context),
            ])) . PHP_EOL, FILE_APPEND);
    }

    public function getDate(): string
    {
        return (new DateTime())->format(DateTimeInterface::W3C);
    }

    public function contextStringify(array $context = []): bool|string|null
    {
        return !empty($context) ? json_encode($context) : null;
    }
}