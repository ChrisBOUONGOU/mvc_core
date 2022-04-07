<?php

namespace kurisushinjiro\phpmvc\form;

use kurisushinjiro\phpmvc\Model;

/**
 * Class BaseField
 * 
 * @author Chris Boukongou <chrisbouk@outlook.fr>
 * @package kurisushinjiro\phpmvc\form
 */

abstract class BaseField
{
    public Model $model;
    public string $attribute;

    /**
     * Field constructor.
     * 
     * @param \kurisushinjiro\phpmvc\Model $model
     * @param string          $attribute
     */

    public function __construct(Model $model, string $attribute)
    {

        $this->model = $model;
        $this->attribute = $attribute;
    }
    abstract public function renderInput(): string;

    public function __toString()
    {
        return sprintf(
            '
        <div class="form-group">
                <label>%s</label>
                %s              
                <div class="invalid-feedback">
                    %s
                </div>
                <br> 
        </div>
        
        
        ',
            $this->model->getLabel($this->attribute),
            $this->renderInput(),
            $this->model->getFirstError($this->attribute),

        );
    }
}
