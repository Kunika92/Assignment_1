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
//    echo '<h3>About Laravel Page </h3>';
    return view('assignment');
});

// Route::get('/about', function () {
//     return '<h3>About Laravel Page </h3>';
// });

// Route::get('/contact',function(){
//     $response_arr=[];
//     $response_arr['author']='John';
//     $response_arr['version']='0.1.1';
//     return $response_arr;
// });

// Route::get('/home',function(){
//     $data = [];
//     $data['version']='0.0.1';
//     return view('welcome',$data);
// });

// Route::get('/post/{id}','PostsController@index');

// Route::resource('post','PostsController');

// Route::get('admin/posts/example/',array('as'=>'admin.home',function(){
//     $url = route('admin.home');
//     return 'This url is '.$url;
// }));


// Route::get('/assignment','PostsController@assignment');