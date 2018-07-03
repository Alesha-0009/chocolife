<?php

/**
 * Get User List
 */
Route::get('/users','UserController@getUsers');

/**
 * Get One User
 */
Route::get('/user/{id}','UserController@getUser');

/** Create User*/
Route::post('/user','UserController@createUser');
