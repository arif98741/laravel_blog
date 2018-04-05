<?php

Route::get('contact', 'PageController@getContact');

Route::get('about', 'PageController@getAbout');

Route::get('/', 'PageController@getIndex');

Route::resource('posts','PostController');



