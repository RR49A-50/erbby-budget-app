<?php

namespace App\Repositories;

use App\Models\Outcome;

class OutcomeRepository extends BaseRepository
{
    public function __construct(Outcome $model)
    {
        parent::__construct($model);
    }

    public function all() 
    {
        return Outcome::all();
    }

    
}




