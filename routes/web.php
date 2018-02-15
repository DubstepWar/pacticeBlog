<?php



// главная
Route::get('/', 'PageController@seeAll')->name('home');

//пост
Route::get('/post/{alias}', 'PostController@getPost')->name('post');

Auth::routes();

//статические стр
Route::get('/about', 'AboutController@index')->name('about');
Route::get('/contacts', 'ContactsController@index')->name('contacts');

//теги и категории
Route::get('/categories', 'CategoriesController@show')->name('categories');
Route::get('/tags', 'TagsController@show')->name('tags');

//Посты тегов
Route::get('/posts/tag/{alias}','TagPostsController@show')->name('tag');

//все посты категории
Route::get('/category/{alias}', 'PostsCategory@show')->name('category_posts');

//коменты
Route::post('/post', 'PostController@comment')->name('comment_post');



Auth::routes();


//админка

Route::group(['middleware' => 'auth', 'middleware' => 'access:admin'], function () {
    //главная(редактирование постов)
    Route::get('/admin', 'AdminController@showPanel')->name('admin');

});
Route::get('/admin/add-post', 'AdminController@addPost')->name('addPost');
Route::post('/admin/add-post', 'AdminController@storePost')->name('storePost');
//удаление поста
Route::delete('/admin/{article}', 'AdminController@deletePost')->name('deletePost');
//обновление поста
Route::put('/admin/{id}', 'AdminController@updatePost')->name('updatePost');

Route::get('/admin/comment', 'AdminCommentController@showPanel')->name('admin_com');
Route::delete('/admin/comment/{comment}','AdminCommentController@deleteComm')->name('deleteComm');
Route::put('/admin/comment/{id}','AdminCommentController@updateComm')->name('editComm');
