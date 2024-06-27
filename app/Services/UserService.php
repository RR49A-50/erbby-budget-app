<?php

namespace App\Services;
use App\Repositories\UserRepository;

use App\Models\User;

class UserService
{
    public function __construct(protected UserRepository $repository)
    {
        
    }

    public function all()
    {
        return $this->repository->all();
    }

    public function create(array $payload)
    {
        return $this->repository->create($payload);
    }

    public function show(int $id)
    {
        return $this->repository->show($id);
    }

    public function delete(int $id)
    {
        return $this->repository->delete($id);

    }

    public function getByUsername(string $username) {
        return$this->repository->getByUsername($username);
        
    }
}
