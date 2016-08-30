<?php

namespace App\Repositories\Constract;

interface UserRepositoryInterface
{

    public function getAll();

    public function find($id);
}
