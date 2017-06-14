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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', 'FrontController@index')->name('home.index');

Auth::routes();
//Frontend Area
Route::group(['prefix' => 'buku'], function(){
    Route::get('/', 'FrontController@showAllBuku')->name('home.buku');
    Route::get('detail/{slug}', 'FrontController@detailBuku')->name('home.buku.detail');
});

Route::group(['prefix' => 'perujuk'], function(){
    Route::get('/', 'FrontController@showAllUser')->name('home.user');
    Route::get('/profile/{id}', 'FrontController@detailUser')->name('home.user.detail');
});


//Backend Area
Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function(){
    Route::get('/', 'AdminController@index')->name('admin');

    //Backend Buku
    Route::group(['prefix' => 'buku'], function(){
        Route::get('/', 'BukuController@index')->name('admin.buku');

        Route::get('add', 'BukuController@getAdd')->name('admin.buku.add.get');
        Route::post('add', 'BukuController@postAdd')->name('admin.buku.add.post');

        Route::get('edit/{id}', 'BukuController@getEdit')->name('admin.buku.edit.get');
        Route::post('edit', 'BukuController@postEdit')->name('admin.buku.edit.post');

        Route::get('delete/{id}', 'BukuController@delete')->name('admin.buku.delete');
    });

    //Backend User
    Route::group(['prefix' => 'user'], function(){
        Route::get('/', 'UserController@index')->name('admin.user');

        Route::get('add', 'UserController@getAdd')->name('admin.user.add.get');
        Route::post('submit', 'UserController@postAdd')->name('admin.user.add.post');

        Route::get('edit/{id}', 'UserController@getEdit')->name('user.edit.get');
        Route::post('edit', 'UserController@postEdit')->name('admin.user.edit.post');

        Route::get('delete/{id}', 'UserController@delete')->name('admin.user.delete');

        //Profile
        Route::get('profile', 'UserController@showProfile')->name('admin.user.profile');
        Route::post('profile/save', 'UserController@postEditProfile', 'UserController@postEditProfile')->name('admin.user.save');
        
    });

    //Backend Pengaturan
    Route::group(['prefix' => 'pengaturan'], function(){
        Route::get('/', 'InfoController@index')->name('admin.info');

        Route::post('save', 'InfoController@postSave')->name('admin.info.save');
    });

    //Backend Category
    Route::group(['prefix' => 'category'], function(){
        Route::get('/', 'CategoryController@index')->name('admin.category');

        Route::get('add', 'CategoryController@getAdd')->name('admin.category.add.get');
        Route::post('submit', 'CategoryController@postAdd')->name('admin.category.add.post');

        Route::get('edit/{id}', 'CategoryController@getEdit')->name('admin.category.edit.get');
        Route::post('edit', 'CategoryController@postEdit')->name('admin.category.edit.post');

        Route::get('delete/{id}', 'CategoryController@delete')->name('admin.category.delete');
    });
});


Route::get('test', function(){
    return view('test');
    
});
Route::post('kirim_gambar', 'BukuController@uploadPdf');

Route::get('keluar', 'UserController@keluar')->name('keluar');
