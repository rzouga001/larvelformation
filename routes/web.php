<?php

use App\Http\Controllers\PostController;
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

/*Route::get('/', function () {
    return view('welcome');
});
Route :: get('posts',function (){
    return response()->json([
        'title'=>'mon titre',
        'nom'=>'rzouga'
    ]);
});*/
/*Route::get('/',function (){
   return view('articles');
});*/
//Route::get( '/','App\Http\Controllers\PostController@index');
Route::get('/',[PostController::class,'index'])->name('welcome');
Route::get('/posts/create',[PostController::class,'create'])->name('posts.create');
Route::post('/posts/create',[PostController::class,'store'])->name('posts.store');
Route::get('/posts/{id}',[PostController::class,'show'])->name('posts.show');
Route::get('/contactdffgf',[PostController::class,'contact'])->name('contact');

