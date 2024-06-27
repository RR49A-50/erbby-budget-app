<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;

class BaseRepository
{
    /**
     * Create a new class instance.
     */
    public function __construct(protected Model $model) 
    {
        
    }

    public function create(array $payload)
    {
        return $this->model::create($payload);
    }

    public function show(int $id)
    {
        return $this->model::find($id);
    }

    public function delete(int $id)
    {
        $data = $this->show($id);
        return $data->delete();
    }
}
