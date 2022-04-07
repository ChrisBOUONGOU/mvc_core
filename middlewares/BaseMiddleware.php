<?php

namespace kurisushinjiro\phpmvc\middlewares;


/**
 * Class BaseMiddleware
 * 
 * @author Chris Boukongou <chrisbouk@outlook.fr>
 * @package kurisushinjiro\phpmvc\middlewares
 */

abstract class BaseMiddleware
{
    abstract public function execute();
}
