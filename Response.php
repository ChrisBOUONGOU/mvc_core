<?php

namespace app\core;

/**
 * Class Response
 * 
 * @author Chris Boukongou <chrisbouk@outlook.fr>
 * @package app\core
 */

class Response
{
    public function setStatutsCode(int $code)
    {
        http_response_code($code);
    }

    public function redirect(string $url)
    {
        header('Location: ' . $url);
    }
}
