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
Route::get('dang-ky', 'Auth\RegisterController@register');
Route::post('register', 'Auth\RegisterController@storeUser');

Route::get('/dang-nhap', 'HomeController@login')->name('login');
// Route::post('/login', 'HomeController@postLogin');
// Route::get('login', 'Auth\LoginController@login')->name('login');
Route::post('login', 'Auth\LoginController@authenticate');
Route::get('dang-xuat', 'Auth\LoginController@logout')->name('logout');

Route::get('/','StoryController@index')->middleware('auth');

//---> Routes Story
Route::get('/thong-ke', 'DashboardController@index')->middleware('auth');
Route::get('/quanlytruyen', 'StoryController@index')->middleware('auth');
//---> Thêm mới
Route::post('/create/story','StoryController@store');
Route::get('/them-moi-truyen', 'StoryController@create');
//---> Sửa
Route::get('/sua/truyen/{id}','StoryController@edit');
Route::put('/edit/story/{id}','StoryController@update');
Route::delete('/delete/story/{id}','StoryController@destroy');

//---> Routes category
Route::get('/quanlytheloai', 'CategoryController@index');
Route::post('/create/category','CategoryController@store');

Route::get('/them-moi-the-loai', function () {
    return view('add_new_category');
});


//---> Sửa
Route::get('/sua/theloai/{id}','CategoryController@edit');
Route::put('/edit/category/{id}','CategoryController@update');
Route::delete('/delete/category/{id}','CategoryController@destroy');

//---> Routes Author
Route::get('/quanlytacgia', 'AuthorController@index');
Route::post('/create/author','AuthorController@store');

Route::get('/them-moi-tac-gia', function () {
    return view('add_new_author');
});

//---> Sửa
Route::get('/sua/tacgia/{id}','AuthorController@edit');
Route::put('/edit/author/{id}','AuthorController@update');
Route::delete('/delete/author/{id}','AuthorController@destroy');

//---> Routes Publisher
Route::get('/quanlynhaxuatban', 'PublisherController@index');
Route::post('/create/publisher','PublisherController@store');

Route::get('/them-moi-nha-xuat-ban', function () {
    return view('add_new_publisher');
});
//---> Sửa
Route::get('/sua/nhaxuatban/{id}','PublisherController@edit');
Route::put('/edit/publisher/{id}','PublisherController@update');
Route::delete('/delete/publisher/{id}','PublisherController@destroy')->name('publisher-delete');

Route::get('/quanlynguoidung', 'UserController@index');
Route::post('/create/user', 'UserController@store');

Route::get('/them-moi-nguoi-dung', function () {
    return view('add_new_user');
});

//---> Sửa
Route::get('/sua/nguoidung/{id}','UserController@edit');
Route::put('/edit/user/{id}','UserController@update');
Route::delete('/delete/user/{id}','UserController@destroy');


Route::get('/quanlybinhluan', 'CommentController@index');
Route::post('/create/comment','CommentController@store');

Route::get('/them-moi-binh-luan', function () {
    return view('add_new_comment');
});

//---> Sửa
Route::get('/sua/binhluan/{id}','CommentController@edit');
Route::put('/edit/comment/{id}','CommentController@update');
Route::delete('/delete/comment/{id}','CommentController@destroy');

//---> Routes Viewed story
Route::get('/quanlytruyendaxem', 'ViewedController@index');
Route::post('/create/viewed','ViewedController@store');

Route::get('/them-moi-truyen-da-xem', function () {
    return view('add_new_viewed_story');
});
//---> Sửa
Route::get('/sua/truyendaxem/{id}','ViewedController@edit');
Route::put('/edit/viewed/{id}','ViewedController@update');
Route::delete('/delete/viewed/{id}','ViewedController@destroy')->name('viewed-delete');

//---> Routes Liked story
Route::get('/quanlytruyendathich', 'LikedStoryController@index');
Route::post('/create/liked','LikedStoryController@store');

Route::get('/them-moi-truyen-da-thich', function () {
    return view('add_new_liked_story');
});
//---> Sửa
Route::get('/sua/truyendathich/{id}','LikedStoryController@edit');
Route::put('/edit/liked/{id}','LikedStoryController@update');
Route::delete('/delete/liked/{id}','LikedStoryController@destroy')->name('liked-delete');

//---> Front-end
Route::get('/trang-chu', 'HomeController@home')->name('home');
Route::get('/home', 'HomeController@home');
Route::get('/tim-kiem', 'HomeController@searchStory');
Route::get('/moi-cap-nhat', 'HomeController@latestStory');
Route::get('/moi-dang', 'HomeController@newPostStory');
Route::get('/xem-nhieu', 'HomeController@viewMoreStory');
Route::get('/yeu-thich', 'HomeController@favouriteStory');
Route::get('/truyen-full', 'HomeController@fullStory');
Route::get('/truyen-vip', 'HomeController@vipStory');
Route::get('/{category_slug}', 'HomeController@category');

Route::get('/truyen/{story_slug}', 'HomeController@story');
Route::get('/truyen/chi-tiet/{story_slug}', 'HomeController@storyDetails');
Route::get('/truyen/{user_id}/da-xem', 'HomeController@storyViewed');
Route::get('/truyen/{user_id}/da-thich', 'HomeController@storyLiked');