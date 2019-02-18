<?php


Route::get('/', ['as' => 'home', 'uses' => 'Admin\IndexController@show']);


Route::get('about', ['uses' => 'AboutController@show', 'as' => 'about']);

Route::get('/articles/kombo', ['uses' => 'Admin\Core@getArticles', 'as' => 'kkk']);
Route::get('article/{page}', ['uses' => 'Admin\Core@getArticle', 'as' => 'article',])->middleware('myMiddle:ddd');

Route::resource('/pages', 'Admin\CoreResource');

Route::match(['get', 'post'], '/contact/{id?}', ['uses' => 'Admin\ContactController@show', 'as' => 'contact']);