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
Route::get('/posts/tag/{id}','TagPostsController@show')->name('tag');

//все посты категории
Route::get('/category/{id}', 'PostsCategoryController@show')->name('category_posts');

//коменты
Route::post('/post', 'PostController@comment')->name('comment_post');

Auth::routes();

//личный кабинет
Route::get('/user-profile/{id}','UserProfileController@show')->name('userProfile');
//изменение пароля
Route::get('/user-profile/change/{id}', 'UserProfileController@change')->name('change');
Route::put('/user-profile/change/{id}', 'UserProfileController@updateUser')->name('updateUserInfo');
Route::post('/changePassword','UserProfileController@changePassword')->name('changePassword');


//админка

Route::group(['middleware' => 'auth', 'middleware' => 'access:admin'], function () {
    //главная(редактирование постов)
    Route::get('/admin', 'AdminPostsController@allPosts')->name('admin');

});

//редактирование поста
Route::get('admin/edit-post/{id}', 'AdminPostsController@editPost')->name('editPost');
//добавление постов
Route::get('/admin/add-post', 'AdminPostsController@addPost')->name('addPost');
Route::post('/admin/add-post', 'AdminPostsController@storePost')->name('storePost');
//удаление поста
Route::delete('/admin/{article}', 'AdminPostsController@deletePost')->name('deletePost');
//обновление поста
Route::put('/admin/{id}', 'AdminPostsController@updatePost')->name('updatePost');

//все коменты
Route::get('/admin/comments', 'AdminCommentsController@allComments')->name('allComments');
//редактирование комента
Route::get('/admin/comment/{id}', 'AdminCommentsController@editComment')->name('editComment');
//удаление комента
Route::delete('/admin/comment/{comment}','AdminCommentsController@deleteComment')->name('deleteComment');
//обновление комента
Route::put('/admin/comment/{id}', 'AdminCommentsController@updateComment')->name('updateComment');

//все юзеры
Route::get('/admin/users', 'AdminUsersController@allUsers')->name('allUsers');
//редактирование юзера
Route::get('/admin/user/{id}', 'AdminUsersController@editUser')->name('editUser');
//удаление юзера
Route::delete('/admin/user/{user}','AdminUsersController@deleteUser')->name('deleteUser');
//обновление юзера
Route::put('/admin/user/{id}', 'AdminUsersController@updateUser')->name('updateUser');