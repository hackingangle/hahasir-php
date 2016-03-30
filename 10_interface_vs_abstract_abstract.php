<?php

/**
 * provider
 */
abstract class Provider
{
    /**
     * attempt
     * @return null
     */
    abstract public function attempt();

    /**
     * redirect
     * @return null
     */
    abstract public function redirectCallback();

    public function login()
    {
        $this->attempt();
        $this->redirectCallback();
    }
}

/**
 * github
 */
class GithubProvider extends Provider
{
    /**
     * attempt
     * @return null
     */
    public function attempt()
    {
        var_dump("github attempting...");
    }

    /**
     * redirect
     * @return null
     */
    public function redirectCallback()
    {
        var_dump("redirect url ...");
    }
}

/**
 * facebook
 */
class FacebookProvider extends Provider
{
    /**
     * attempt
     * @return null
     */
    public function attempt()
    {
        var_dump("github attempting...");
    }

    /**
     * redirect
     * @return null
     */
    public function redirectCallback()
    {
        var_dump("redirect url ...");
    }
}

$github = new GithubProvider();
$github->login();
$facebook = new FacebookProvider();
$facebook->login();
