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
    //
    Route::get('/admin', 'AdminController@showPanel')->name('admin');

});
