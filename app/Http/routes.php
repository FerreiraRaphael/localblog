<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
// Blog pages
get('/', 'BlogController@index');
get('sobre', 'BlogController@sobre');
get('tags', 'BlogController@tags');
get('contato', 'BlogController@contato');

// Admin area
get('admin', function () {
  return redirect('/admin/post');
});
$router->group([
  'namespace' => 'Admin',
  'middleware' => 'auth',
], function () {
  resource('admin/post', 'PostController', ['except' => 'show']);
  resource('admin/tag', 'TagController', ['except' => 'show']);
  get('admin/upload','UploadController@index')->name('admin.upload.index');
  post('admin/upload/file', 'UploadController@uploadFile')->name('admin.upload.file');
  delete('admin/upload/file', 'UploadController@deleteFile')->name('admin.upload.file.destroy');
  post('admin/upload/folder','UploadController@createFolder')->name('admin.upload.folder');
  delete('admin/upload/folder', 'UploadController@deleteFolder')->name('admin.upload.folder.destroy');
});

// Logging in and out
get('/auth/login', 'Auth\AuthController@getLogin');
post('/auth/login', 'Auth\AuthController@postLogin');
get('/auth/logout', 'Auth\AuthController@getLogout');

// Mostra o post da slug
get('/{slug}', 'BlogController@showPost');