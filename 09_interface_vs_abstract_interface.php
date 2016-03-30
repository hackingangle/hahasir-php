<?php

/**
 * Provider
 */
interface Provider {
    public function attempt();
}

/**
 * gmail
 */
class GmailProvider implements Provider
{
    /**
     * attempt
     * @return null
     */
    public function attempt()
    {
        var_dump("gmail account checking...");
    }
}

/**
 * facebook
 */
class FacebookProvider implements Provider
{
    /**
     * attempt
     * @return null
     */
    public function attempt()
    {
        var_dump("facebook account checking...");
    }
}

/**
 * user login
 */
class LoginController
{
    /**
     * login
     * @param  Provider $provider provider
     * @return null
     */
    public function login(Provider $provider)
    {
        $provider->attempt();
    }
}

$gmailProvider = new GmailProvider();
$facebookProvider = new FacebookProvider();
$loginController = new LoginController();
$loginController->login($facebookProvider);
$loginController->login($gmailProvider);
