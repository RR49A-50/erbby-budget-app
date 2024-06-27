<?php

namespace App\Services;

use App\Repositories\IncomeRepository;

class IncomeService
{
    public function __construct(protected IncomeRepository $repository)
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