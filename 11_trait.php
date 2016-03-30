<?php
interface Logger
{
    public function log();
}

trait FileLogger
{
    public function log()
    {
        var_dump("logging to file...");
    }
}

class LogToFile implements Logger {
    use FileLogger;
}

$file = new LogToFile();
$file->log();
