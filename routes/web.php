<?php

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
    return view('login');
});

Route::get('/dashboard', function () {
    Config::set('navActive', trans('left_bar.dashboard'));
    return view('dashboard');
});

Route::get('/modals', function () {
    $roles = [
        ['id'=> 1, 'name' => 'Fransiska W.H', 'status' => 'A', 'color'=> 'text-success'],
        ['id'=> 2, 'name' => 'Marcus Xaverius', 'status' => 'P', 'color'=> 'text-danger'],
        ['id'=> 3, 'name' => 'Radian Hatta', 'status'=>'A', 'color'=> 'text-success'],
    ];
    Config::set('navActive', trans('left_bar.classroom'));
    return view('modals', ['roles' => $roles]);
});
