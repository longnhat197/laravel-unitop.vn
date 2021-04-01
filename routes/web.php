<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

//Định tuyến cơ bản

// Route::get('post', function () {
//     return "Đây là trang bài viết";
// });

// Route::get('/admin/product', function () {
//     return "Trang quản lý sản phẩm";
// });

// Route::get('/admin/product/add', function () {
//     return "Trang thêm sản phẩm";
// });

//Định tuyến có tham số
// Route::get('posts/{id}',function($id){
//     return $id;
// });

// Route::get('posts/{cat_id}/page/{page}',function($cat_id,$page){
//     return $cat_id.'-'.$page;
// });

// //Đặt tên định tuyến
// Route::get('users/profile',function(){
//     return route('profile');
// })->name('profile');

// Route::get('/admin/product/add', function () {
//     return route('product.add');
// })-> name('product.add');

// //Định tuyến có tham số tùy chọn
// Route::get('users/{id?}',function($id=0){
//     echo $id;
// });

//Định tuyến với thám số có ràng buộc biểu thức chính quy

// Route::get('product/{id}',function($id){
//     return $id;
// })->where('id','[0-9]+');

// Route::get('product/{slug}/{id}',function($slug,$id){
//     return $id.'---'.$slug;
// })->where(['slug'=>'[a-zA-Z0-9-_]+']);

//Định tuyến qua 1 view 
// Route::view('/welcome','welcome');

// Route::view('/post','post',['id'=>20]);

//Định tuyến đến 1 controller
// Route::get('/post/{id}','PostController@detail');
// Route::get('/post/{id}',[PostController::class,'detail']);

//Bài tập
// Route::get('/admin/post/add',function(){
//     return "Admin:Trang thêm bài viết";
// });
// Route::get('/admin/post/show',function(){
//     return "Admin:Show bài viết";
// });
// Route::get('/admin/post/update/{id}',function($id){
//     return "Admin:Cập nhật bài viết có id: ".$id;
// });
// Route::get('/admin/post/delete/{id}',function($id){
//     return "Admin:Xóa bài viết ".$id;
// });

//-------------------------------------------------

Route::get('/product/show/{id}','ProductController@show');
Route::get('/product/create','ProductController@create');
Route::get('/product/update/{id}','ProductController@update');



// Route::resource('post','PostController');

#Bài tập controller
Route::get('admin/post/add','AdminPostController@add');
Route::get('admin/post/show','AdminPostController@show');
Route::get('admin/post/update/{id}','AdminPostController@update');
Route::get('admin/post/delete/{id}','AdminPostController@delete');

Route::get('post/index','PostController@index');