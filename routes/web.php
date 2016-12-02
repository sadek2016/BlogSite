<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

/*Route::get('/', function () {
    return view('user_panel.home');
});

*/
/*Route::get('/post/{id}', function ($id) {
    return view('user_panel.post');
});*/

/*Route::get('/adminpage', function () {
    return view('admin_panel.index');
});*/


Route::get('/titleslogan', function () {
    return view('admin_panel.titleslogan');
});

Route::get('/404', function () {
    return view('user_panel.404');
});
/*Route::get('/social', function () {
    return view('admin_panel.social');
});*/


/*Route::get('/copyright', function () {
    return view('admin_panel.copyright');
});*/


/*Route::get('/addcat', function () {
    return view('admin_panel.addcat');
});
*/

/*Route::get('/catlist', function () {
    return view('admin_panel.catlist');
});
*/
/*Route::get('/addpost', function () {
    return view('admin_panel.addpost');
});
*/
/*Route::get('/postlist', function () {
    return view('admin_panel.postlist');
});*/

/*Route::get('/inbox', function () {
    return view('admin_panel.inbox');
});*/

/*Route::get('/changepassword', function () {
    return view('admin_panel.changepassword');
});
*/
Route::get('/loginpage', function () {
    return view('login_panel.loginpage');
});


//User panel....

Route::get('/','postController@index');
Route::get('/post/{cat}/{id}','postController@getpost');
Route::get('/checklimit','postController@checklimit');
Route::get('/catpost/{id}','postController@catpost');
Route::get('/searchpost','postController@searchpostpage');
Route::post('/searchpost','postController@searchpost');
Route::get('/createdpage/{id}','postController@createdpage');
Route::get('/contactpage','postController@contactpage');
Route::post('/contactpage','postController@contactpageinsert');
Route::post('/comment','postController@comment');

//Admin panel...
Route::get('/adminpage','postadminController@adminpage');
Route::get('/catlist','postadminController@catlist');
Route::get('/addcat','postadminController@cat_insertpage');
Route::post('/addcat','postadminController@catinsert');
Route::get('/catedit/{id}','postadminController@catedit');
Route::post('/catedit','postadminController@catupdate');
Route::get('/catdel/{id}','postadminController@catdel');
Route::get('/postlist','postadminController@postlist');


Route::get('/addpost','postadminController@post_inserpage');
Route::post('/addpost','postadminController@postinsert');
Route::get('/postview/{id}','postadminController@postview');
Route::post('/postlist','postadminController@postviewreturn');
Route::get('/postedit/{id}','postadminController@posteditpage');
Route::post('/postlist','postadminController@postedit');
Route::get('/postdelete/{id}','postadminController@postdelete');

Route::get('/titleslogan','postadminController@titleslogan');
Route::post('/titleslogan','postadminController@titlesloganUpdate');
Route::get('/social','postadminController@social');
Route::post('/social','postadminController@socialupdate');


Route::get('/copyright','postadminController@copyright');
Route::post('/copyright','postadminController@copyrightupdate');
Route::get('/addpage','postadminController@addpage');
Route::post('/addpage','postadminController@addpageinsert');
Route::get('/updatepage/{id}','postadminController@updatepage');
Route::post('/updatepage','postadminController@pageupdate');
Route::get('/pagedelete/{id}','postadminController@pagedelete');
Route::get('/inbox','postadminController@inbox');


Route::get('/contactview/{id}','postadminController@contactview');
Route::get('/sennupdate/{id}','postadminController@sennupdate');
Route::get('/unseenupdate/{id}','postadminController@unseenupdate');
Route::get('/contactdelete/{id}','postadminController@contactdelete');
Route::get('/changepassword','postadminController@changepassword');
Route::get('/replymessage/{id}','postadminController@replymessage');
Route::post('/replymessage','postadminController@replymessagesent');


Route::get('/adduser','postadminController@adduser');
Route::post('/registeruser','postadminController@registeruser');

//login System...
Route::get('/login', 'HomeController@login');
Auth::routes();

Route::get('/home', 'HomeController@index');
