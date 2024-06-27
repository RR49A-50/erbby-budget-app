<?php

use App\Http\Controllers\OutcomeController;
use App\Http\Controllers\IncomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('/login',[AuthController::class,'login']);

route::middleware('auth:api')->group(function() {



//outcome
route::post('/outcome', [OutcomeController::class, 'store']);
route::get('/list-outcome',[OutcomeController::class,'index']);
route::put('/update-outcome/{id}',[OutcomeController::class,'update']);
route::delete('/delete-outcome/{id}',[OutcomeController::class,'destroy']);

//income
route::post('/income', [IncomeController::class, 'store']);
route::get('/list-income',[IncomeController::class,'index']);
route::put('/update-income/{id}',[IncomeController::class,'update']);
route::delete('/delete-income/{id}',[IncomeController::class,'destroy']);

//user
route::post('/user', [UserController::class, 'store']);
route::get('/list-user',[UserController::class,'index']);
route::put('/update-user',[UserController::class,'update']);
route::delete('/delete-user/{id}',[UserController::class,'destroy']);

});

//Auth



