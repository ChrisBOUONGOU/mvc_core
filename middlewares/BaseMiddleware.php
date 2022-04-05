<?php

namespace app\core\middlewares;


/**
 * Class BaseMiddleware
 * 
 * @author Chris Boukongou <chrisbouk@outlook.fr>
 * @package app\core\middlewares
 */

abstract class BaseMiddleware
{
    abstract public function execute();
}
