<?php

namespace kurisushinjiro\phpmvc\exception;


/**
 * Class ForbiddenException
 * 
 * @author Chris Boukongou <chrisbouk@outlook.fr>
 * @package kurisushinjiro\phpmvc\exception
 */

class ForbiddenException extends \Exception
{
    protected $message = 'You don\'t have permission to access this page';
    protected $code = 403;
}
