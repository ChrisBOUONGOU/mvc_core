<?php

namespace kurisushinjiro\phpmvc\form;

use kurisushinjiro\phpmvc\Model;

/**
 * Class Form
 * 
 * @author Chris Boukongou <chrisbouk@outlook.fr>
 * @package kurisushinjiro\phpmvc\form
 */

class Form
{
    public static function begin($action, $method)
    {
        echo sprintf('<form action="%s" method="%s">', $action, $method);
        return new Form();
    }

    public static function end()
    {
        echo '</form>';
    }
    public function field(Model $model, $attribute)
    {
        return new InputField($model, $attribute);
    }
}
