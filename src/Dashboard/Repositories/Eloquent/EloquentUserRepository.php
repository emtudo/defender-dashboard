<?php

namespace Artesaos\Defender\Repositories\Eloquent;

use Artesaos\Defender\Contracts\UserRepository;
use Artesaos\Defender\Repositories\Eloquent\AbstractEloquentRepository;

class EloquentUserRepository extends AbstractEloquentRepository implements UserRepository
{
    public function all(array $with = [])
    {
        return $this->model->with($with)->paginate(10);
    }

    public function findById($id)
    {
        return $this->model->with('roles', 'permissions')->find($id);
    }   
}
