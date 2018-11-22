<?php
namespace Patterns\Factory;

class StdoutLoggerFactory implements LoggerFactory
{
    public function createLogger()
    {
        return new StdoutLogger();
    }
}