<?php

namespace App\Models;

use Psr\Log\LoggerInterface;
require __DIR__ . '/../autoload.php';
class Logger implements LoggerInterface
{
    private $pathToLoggFile;

    public function __construct($pathToLoggFile)
    {
        $this->pathToLoggFile = $pathToLoggFile;
    }
    private function writeToLogg(string $message)
    {
        file_put_contents($this->pathToLoggFile, $message . PHP_EOL, FILE_APPEND);
    }
    public function emergency(\Stringable|string $message, array $context = []): void
    {
        $this->writeToLogg("Emergency: $message");
    }

    public function alert(\Stringable|string $message, array $context = []): void
    {
        $this->writeToLogg("Alert: $message");
    }

    public function critical(\Stringable|string $message, array $context = []): void
    {
        $this->writeToLogg("Critical: $message");
    }

    public function error(\Stringable|string $message, array $context = []): void
    {
        $this->writeToLogg("error: $message, id: $context[0]");
    }

    public function warning(\Stringable|string $message, array $context = []): void
    {
        $this->writeToLogg("Warning: $message");
    }

    public function notice(\Stringable|string $message, array $context = []): void
    {
        $this->writeToLogg("Notice: $message");
    }

    public function info(\Stringable|string $message, array $context = []): void
    {
        $this->writeToLogg("Info: $message");
    }

    public function debug(\Stringable|string $message, array $context = []): void
    {
        $this->writeToLogg("Debug: $message");
    }

    public function log($level, \Stringable|string $message, array $context = []): void
    {
        $this->writeToLogg("Log: $message");
    }
}