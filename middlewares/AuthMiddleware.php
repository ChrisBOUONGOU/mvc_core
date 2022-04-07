<?php

namespace kurisushinjiro\phpmvc\middlewares;

use kurisushinjiro\phpmvc\Application;
use kurisushinjiro\phpmvc\exception\ForbiddenException;

/**
 * Class AuthMiddleware
 * 
 * @author Chris Boukongou <chrisbouk@outlook.fr>
 * @package kurisushinjiro\phpmvc\middlewares
 */

class AuthMiddleware extends BaseMiddleware
{
    public array $actions = [];

    /**
     * AuthMiddleware constructor
     * 
     * @param array $actions
     */
    public function __construct(array $actions = [])
    {
        $this->actions = $actions;
    }


    public function execute()
    {
        if (Application::isGuest()) {
            if (empty($this->actions) || in_array(Application::$app->controller->action, $this->actions)) {
                throw new ForbiddenException();
            }
        }
    }
}
