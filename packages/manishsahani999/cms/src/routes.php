<?php
    Route::get('/', 'PagesController@getIndex');
    Route::get('/about', 'PagesController@getAbout');
    Route::get('/contact', 'PagesController@getContact');
    Route::resource('posts', 'PostController');
    Route::resource('categories', 'CategoryController', ['execpt' => 'create']);
    Route::resource('tags', 'TagController', ['execpt' => 'create']);
?>