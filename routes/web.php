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

/**
 * display all tasks
 */
Route::get('/', function () {
    //
});

/**
 * add new task
 */
Route::post('/task', function(Request $request) {
    //
});

/**
 * delete an existing task
 */
Route::delete('/task/{id}', function($id) {
    //
});
