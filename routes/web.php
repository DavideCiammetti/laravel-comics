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

// Route::get('/{id}', function ($id) {

//     $comics = config('comicsDb');
//     $comic = $comics[$id];

//     return view('shared.welcome',  $comic);
// });

Route::get('/', function () {

    $data = [
        'comics' => config('comicsDb'),
    ];

    return view('shared.welcome', $data);
});
Route::get('/info/{id}', function ($id) {

    $comics = config('comicsDb');
    $comic = $comics[$id];
   
    return view('shared.info',  compact('comic'));
});