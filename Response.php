<?php

namespace kurisushinjiro\phpmvc;

/**
 * Class Response
 * 
 * @author Chris Boukongou <chrisbouk@outlook.fr>
 * @package kurisushinjiro\phpmvc
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
