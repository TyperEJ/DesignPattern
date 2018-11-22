<?php
namespace Patterns\Factory;

class FileLogger implements Logger
{
    /**
     * @var string
     */
    private $filePath;

    public function __construct($filePath)
    {
        $this->filePath = $filePath;
    }

    public function log($message)
    {
        echo $message .'放進' . $this->filePath;
    }
}