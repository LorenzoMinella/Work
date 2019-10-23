<?php
use App\Banner;

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
    $banners = Banner::orderBy('id','DESC')->first();
    return view('welcome', compact('banners'));
});

Route::group(['middleware' => 'auth'], function () {

		Route::get('roles', ['as'           => 'roles.index', 'uses'           => 'RoleController@index']);
		Route::get('roles/create', ['as'    => 'roles.create', 'uses'    => 'RoleController@create']);
		Route::post('roles/create', ['as'   => 'roles.store', 'uses'   => 'RoleController@store']);
		Route::get('roles/{id}', ['as'      => 'roles.show', 'uses'      => 'RoleController@show']);
		Route::get('roles/{id}/edit', ['as' => 'roles.edit', 'uses' => 'RoleController@edit']);
		Route::patch('roles/{id}', ['as'    => 'roles.update', 'uses'    => 'RoleController@update']);
		Route::delete('roles/{id}', ['as'   => 'roles.destroy', 'uses'   => 'RoleController@destroy']);


		Route::get('permissions', ['as'           => 'permissions.index', 'uses'           => 'PermissionController@index']);
		Route::get('permissions/create', ['as'    => 'permissions.create', 'uses'    => 'PermissionController@create']);
		Route::post('permissions/create', ['as'   => 'permissions.store', 'uses'   => 'PermissionController@store']);
		Route::get('permissions/{id}', ['as'      => 'permission.show', 'uses'      => 'PermissionController@show']);
		Route::get('permissions/{id}/edit', ['as' => 'permission.edit', 'uses' => 'PermissionController@edit']);
		Route::patch('permissions/{id}', ['as'    => 'permissions.update', 'uses'    => 'PermissionController@update']);
		Route::delete('permissions/{id}', ['as'   => 'permission.destroy', 'uses'   => 'PermissionController@destroy']);

		Route::get('banners', ['as'           => 'banners.index', 'uses'           => 'BannerController@index']);
		Route::get('banners/create', ['as'    => 'banner.create', 'uses'    => 'BannerController@create']);
		Route::post('banners/create', ['as'   => 'banners.store', 'uses'   => 'BannerController@store']);
		Route::get('banners/{id}', ['as'      => 'banner.show', 'uses'      => 'BannerController@show']);
		Route::get('banners/{id}/edit', ['as' => 'banner.edit', 'uses' => 'BannerController@edit']);
		Route::patch('banners/{id}', ['as'    => 'banners.update', 'uses'    => 'BannerController@update']);
		Route::delete('banners/{id}', ['as'   => 'banner.destroy', 'uses'   => 'BannerController@destroy']);

		Route::get('users', ['as'           => 'users.index', 'uses'           => 'UserController@index']);
		Route::get('users/create', ['as'    => 'users.create', 'uses'    => 'UserController@create']);
		Route::post('users/create', ['as'   => 'users.store', 'uses'   => 'UserController@store']);
		Route::get('users/{id}', ['as'      => 'users.show', 'uses'      => 'UserController@show']);
		Route::get('users/{id}/edit', ['as' => 'users.edit', 'uses' => 'UserController@edit']);
		Route::patch('users/{id}', ['as'    => 'users.update', 'uses'    => 'UserController@update']);
		Route::delete('users/{id}', ['as'   => 'user.destroy', 'uses'   => 'UserController@destroy']);



    //    Route::get('/link1', function ()    {
//        // Uses Auth Middleware
//    });

    //Please do not remove this if you want adminlte:route and adminlte:link commands to works correctly.
    #adminlte_routes
});
