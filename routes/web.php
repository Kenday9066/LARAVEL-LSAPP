<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

use App\Http\Controllers\PagesController;

Route::get('/', [PagesController::class, 'index']);
Route::get('/home', [PagesController::class, 'home']);
Route::get('/about', [PagesController::class, 'about']);
Route::get('/services', [PagesController::class, 'services']);

/*
Route::get('/hello', function () {
    return 'Hello world';
});

Route::get('/home', function(){
    return view('pages.home');
});

Route::get('/users/{id}/{name}', function($id, $name){
    return 'This is user '.$name. ' with an id of '.$id;
});

*/



