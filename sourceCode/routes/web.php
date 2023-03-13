<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PriorityController;
use App\Http\Controllers\StatusController;
use App\Http\Controllers\ToDoController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


// Quản trị danh sách các công việc
Route::group(['prefix'=>'todo'],function() {
    Route::get('/', [ToDoController::class,'index'])->name('todo.index');
    Route::get('/add', [ToDoController::class,'add'])->name('todo.add');
    Route::post('/add', [ToDoController::class,'store'])->name('todo.store');
    Route::get('/edit/{id}', [ToDoController::class,'edit'])->name('todo.edit');
    Route::put('/edit/{id}', [ToDoController::class,'update'])->name('todo.update');
    Route::delete('/delete/{id}', [ToDoController::class,'destroy'])->name('todo.delete');
});

// Quản trị danh mục
Route::group(['prefix'=>'category'],function() {
    Route::get('/', [CategoryController::class,'index'])->name('category.index');
    Route::get('/add', [CategoryController::class,'add'])->name('category.add');
    Route::post('/add', [CategoryController::class,'store'])->name('category.store');
    Route::get('/edit/{id}', [CategoryController::class,'edit'])->name('category.edit');
    Route::put('/edit/{id}', [CategoryController::class,'update'])->name('category.update');
    Route::delete('/delete/{id}', [CategoryController::class,'destroy'])->name('category.delete');
});

// Quản trị trạng thái
Route::group(['prefix'=>'status'],function() {
    Route::get('/', [StatusController::class,'index'])->name('status.index');
    Route::get('/add', [StatusController::class,'add'])->name('status.add');
    Route::post('/add', [StatusController::class,'store'])->name('status.store');
    Route::get('/edit/{id}', [StatusController::class,'edit'])->name('status.edit');
    Route::put('/edit/{id}', [StatusController::class,'update'])->name('status.update');
    Route::delete('/delete/{id}', [StatusController::class,'destroy'])->name('status.delete');
});

// Quản trị mức độ
Route::group(['prefix'=>'priority'],function() {
    Route::get('/', [PriorityController::class,'index'])->name('priority.index');
    Route::get('/add', [PriorityController::class,'add'])->name('priority.add');
    Route::post('/add', [PriorityController::class,'store'])->name('priority.store');
    Route::get('/edit/{id}', [PriorityController::class,'edit'])->name('priority.edit');
    Route::put('/edit/{id}', [PriorityController::class,'update'])->name('priority.update');
    Route::delete('/delete/{id}', [PriorityController::class,'destroy'])->name('priority.delete');
});

