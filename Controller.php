<?php

namespace kurisushinjiro\phpmvc;

use kurisushinjiro\phpmvc\middlewares\BaseMiddleware;

/**
 * Class Controller
 * 
 * @author Chris Boukongou <chrisbouk@outlook.fr>
 * @package kurisushinjiro\phpmvc
 */

class Controller
{
    public string $layout = 'main';
    public string $action = '';

    /**
     * @var \kurisushinjiro\phpmvc\middlewares\BaseMiddleware[]
     */
    public array $middlewares = [];

    public function setLayout($layout)
    {
        $this->layout = $layout;
    }

    public function render($view, $params = [])
    {
        return Application::$app->view->renderView($view, $params);
    }

    public function registerMiddleware(BaseMiddleware $middleware)
    {
        $this->middlewares[] = $middleware;
    }

    /**
     * @return \kurisushinjiro\phpmvc\middlewares\BaseMiddleware[]
     */
    public function getMiddlewares(): array
    {
        return $this->middlewares;
    }
}
