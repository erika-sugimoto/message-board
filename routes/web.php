<?php


Route::get('message/', 'MessagesController@index');
Route::resource('messages', 'MessagesController');