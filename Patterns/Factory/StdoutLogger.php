<?php
namespace Patterns\Factory;

class StdoutLogger implements Logger
{
    public function log($message)
    {
        echo $message;
    }
}