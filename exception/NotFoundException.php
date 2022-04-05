<?php

namespace app\core\exception;


/**
 * Class NotFoundException
 * 
 * @author Chris Boukongou <chrisbouk@outlook.fr>
 * @package app\core\exception
 */

class NotFoundException extends \Exception
{
    protected $message = 'Page not found';
    protected $code = 404;
}
