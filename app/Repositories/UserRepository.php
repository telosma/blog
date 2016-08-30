<?php

namespace App\Repositories;

use App\Repositories\Constract\UserRepositoryInterface;
use App\User;

class UserRepository implements UserRepositoryInterface
{

    public function getAll()
    {
        return User::all();
    }

    public function find($id)
    {
        return User::find($id);
    }

}
