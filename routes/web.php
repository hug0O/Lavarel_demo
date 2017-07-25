<?php

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
  $isWeekend = date('N') >= 6;
  $first_name = 'Bernard';
  $last_name = 'hugo';
  $person = ['toto', 'titi', 'tata'];
  // $person = [];
    return view('welcome', compact('first_name', 'last_name', 'person','isWeekend'));
});

Route::get('foo', function () {
    return 'Hello World';
});

Route::get('user/{name?}', function ($name = null) {
    return $name;
});
