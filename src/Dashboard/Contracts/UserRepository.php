<?php

namespace Artesaos\Defender\Contracts;

interface UserRepository
{
    public function all(array $with = []);

    public function findById($id);
}
