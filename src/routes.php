<?php


Route::group(['prefix' => config('filemanager.defaultRoute', 'admin/filemanager'), 'middleware' => config('filemanager.middleware')], function () {
    Route::get('/', 'Dar3y\FileManager\Controllers\FileManagerController@getIndex');
    Route::get('/dialog', 'Dar3y\FileManager\Controllers\FileManagerController@getDialog');

    Route::post('/get_folder', 'Dar3y\FileManager\Controllers\FileManagerController@ajaxGetFilesAndFolders');
    Route::post('/uploadFile', 'Dar3y\FileManager\Controllers\FileManagerController@uploadFile');
    Route::post('/createFolder', 'Dar3y\FileManager\Controllers\FileManagerController@createFolder');
    Route::post('/delete', 'Dar3y\FileManager\Controllers\FileManagerController@delete');
    Route::get('/download', 'Dar3y\FileManager\Controllers\FileManagerController@download')->where('path', '.*');
    Route::post('/preview', 'Dar3y\FileManager\Controllers\FileManagerController@preview')->where('file', '.*');
    Route::post('/move', 'Dar3y\FileManager\Controllers\FileManagerController@move');
    Route::post('/rename', 'Dar3y\FileManager\Controllers\FileManagerController@rename')->where('file', '.*');
    Route::post('/optimize', 'Dar3y\FileManager\Controllers\FileManagerController@optimize')->where('file', '.*');
});
