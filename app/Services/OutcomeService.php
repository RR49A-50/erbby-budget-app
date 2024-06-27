<?php

namespace App\Services;

use App\Repositories\OutcomeRepository;

class OutcomeService 
{
    public function __construct(protected OutcomeRepository $repository)
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
}