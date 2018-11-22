<?php
namespace Patterns\Factory;

class FileLoggerFactory implements LoggerFactory
{
    /**
     * @var string
     */
    private $filePath;

    public function __construct($filePath)
    {
        $this->filePath = $filePath;
    }

    public function createLogger()
    {
        return new FileLogger($this->filePath);
    }
}