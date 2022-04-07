<?php

namespace kurisushinjiro\phpmvc\exception;


/**
 * Class NotFoundException
 * 
 * @author Chris Boukongou <chrisbouk@outlook.fr>
 * @package kurisushinjiro\phpmvc\exception
 */

class NotFoundException extends \Exception
{
    protected $message = 'Page not found';
    protected $code = 404;
}
