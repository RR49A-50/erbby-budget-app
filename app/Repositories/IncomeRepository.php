<?php

namespace App\Repositories;

use App\Models\Income;

class IncomeRepository extends BaseRepository
{
    public function __construct(Income $model)
    {
        parent::__construct($model); 
    } 

    public function all()
    {
        return Income::all();
    }

}