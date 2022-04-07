<?php

namespace kurisushinjiro\phpmvc;

use kurisushinjiro\phpmvc\db\DbModel;

/**
 * Class UserModel
 * 
 * @author Chris Boukongou <chrisbouk@outlook.fr>
 * @package kurisushinjiro\phpmvc
 */

abstract class UserModel extends DbModel
{
    abstract public function getDisplayName(): string;
}
