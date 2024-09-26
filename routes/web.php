<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('user/list',[UserController::class,'list'])->name('user.list');

Route::get('user/list/add',[UserController::class,'add'])->name('user.add');

Route::post('user/list/adduser',[UserController::class,'addUser'])->name('user.addUser');

Route::get('user/list/edit/{id}',[UserController::class,'edit'])->name('user.edit');

Route::put('user/list/editdata/{id}',[UserController::class,'editUser'])->name('user.editUser');

Route::get('user/list/delete/{id}',[UserController::class,'delete'])->name('user.delete');



