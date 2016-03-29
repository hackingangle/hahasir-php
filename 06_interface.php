<?php
/**
 * interface Logger
 */
interface Logger
{
    /**
     * log
     * @param  string $username name
     * @return null
     */
    public function log($username);
}

/**
 * log to file
 */
class LogToFile implements Logger
{
    /**
     * log
     * @param  string $username name
     * @return null
     */
    public function log($username)
    {
        var_dump("logging to file...". $username);
    }
}

/**
 * log to cached
 */
class LogToCached implements Logger
{
    /**
     * log
     * @param  string $username name
     * @return null
     */
    public function log($username) 
    {
        var_dump("logging to cached...". $username);
    }
}

class LogToSys implements Logger {
    /**
     * log
     * @param  string $username name
     * @return null
     */
    public function log($username) 
    {
        var_dump("logging to system by api...". $username);
    }
}

class UserController {
    public function show(Logger $logger) 
    {
        $username = "hackingangle";
        $logger->log($username);
    }
}

$userC = new UserController();
$userC->show(new LogToCached());
$userC->show(new LogToFile());
$userC->show(new LogToSys());
