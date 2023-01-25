<?php

use App\Models\Details;
use App\Models\Listings;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ListingsController;

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

Route::get('/users', function () {
    return response("<h1>Hello Class</h1>", 200)->header('Content-Type', 'text/plain');
    
});

//This is a response method that is used to fetch the id of a post from database which is always unique and is also know as using unique IDs
Route::get('/posts/{id}', function ($id){
    return response("This is Post " . $id);

});


//This method is also knnown as using a constraints 
Route::get('/section/{id}', function($id){
    return response("This is Section ". $id);

})->where('id', '[0-9]+');

//dd() is used for debugging code and it stand for dumb and die. This is also used to return the name and age of the user
Route::get('/search', function (Request $request)   {

    // dd($request);

    return $request->name. ' ' .$request->age;
});


Route::get('/', [ListingsController::class, 'index']);

Route::get('/job_detail/{details}', [ListingsController::class, 'show']);

Route::get('/create_job', [ListingsController::class, 'create'])->middleware('auth');

Route::post('/', [ListingsController::class, 'store'])->middleware('auth');

Route::get('/{listings}/edit', [ListingsController::class, 'edit'])->middleware('auth');

Route::put('/{listings}/', [ListingsController::class, 'update'])->middleware('auth');

Route::delete('/{listings}/', [ListingsController::class, 'destroy'])->middleware('auth');

Route::get('/register', [UserController::class, 'create'])->middleware('guest');

Route::post('/users', [UserController::class, 'store']);

Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');

Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');

Route::post('/users/authenticate', [UserController::class, 'authenticate']);

Route::get('/manage', [ListingsController::class, 'manage'])->middleware('auth');