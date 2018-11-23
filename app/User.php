<?php

namespace App;

use Cms_Framework_Seed\User\Models\User as BaseUser;

class User extends BaseUser
{
    /**
     * Configuartion for the model.
     *
     * @var array
     */
    protected $config = 'users.user.model';
}
