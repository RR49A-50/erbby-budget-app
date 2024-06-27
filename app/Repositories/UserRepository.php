<?php

namespace App\Repositories;

use App\Models\User;

class UserRepository extends BaseRepository
{
    public function __construct(User $model)
    {
        parent::__construct($model); 
    } 

    // public function all()
    // {
    //     return User::all();
    // }
    
    public function getByUsername(string $username) {
        $data = $this->model->where("username",$username)->first();
        return $data;
    }

    public function all() {
        return $this->model->all();
    }

}