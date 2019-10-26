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

Route::get('/', ['as' => 'site.home', 'uses' => 'SiteController@home']);

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


		Route::get('companies', ['as'           => 'companies.index', 'uses'           => 'CompaniesController@index']);
		Route::get('companies/create', ['as'    => 'companies.create', 'uses'    => 'CompaniesController@create']);
		Route::post('companies/create', ['as'   => 'companies.store', 'uses'   => 'CompaniesController@store']);
		Route::get('companies/{id}', ['as'      => 'companies.show', 'uses'      => 'CompaniesController@show']);
		Route::get('companies/{id}/edit', ['as' => 'companies.edit', 'uses' => 'CompaniesController@edit']);
		Route::patch('companies/{id}', ['as'    => 'companies.update', 'uses'    => 'CompaniesController@update']);
		Route::delete('companies/{id}', ['as'   => 'companies.destroy', 'uses'   => 'CompaniesController@destroy']);

		Route::get('advantages', ['as'      => 'advantages.index', 'uses'           => 'AdvantagesController@index']);
		Route::get('advantages/create', ['as'    => 'advantages.create', 'uses'    => 'AdvantagesController@create']);
		Route::post('advantages/create', ['as'   => 'advantages.store', 'uses'   => 'AdvantagesController@store']);
		Route::get('advantages/{id}', ['as'      => 'advantages.show', 'uses'      => 'AdvantagesController@show']);
		Route::get('advantages/{id}/edit', ['as' => 'advantages.edit', 'uses' => 'AdvantagesController@edit']);
		Route::patch('advantages/{id}', ['as'    => 'advantages.update', 'uses'    => 'AdvantagesController@update']);
		Route::delete('advantages/{id}', ['as'   => 'advantages.destroy', 'uses'   => 'AdvantagesController@destroy']);

		Route::get('homepage', ['as'           => 'homepage.index', 'uses'           => 'SiteController@homepage']);
		Route::get('homepage/create', ['as'    => 'homepage.create', 'uses'    => 'SiteController@create']);
		Route::post('homepage/create', ['as'   => 'homepage.home_store', 'uses'   => 'SiteController@home_store']);
		Route::get('homepage/{id}', ['as'      => 'homepage.show', 'uses'      => 'SiteController@show']);
		Route::get('homepage/{id}/edit', ['as' => 'homepage.edit', 'uses' => 'SiteController@edit']);
		Route::patch('homepage/{id}', ['as'    => 'homepage.update', 'uses'    => 'SiteController@update']);
		Route::delete('homepage/{id}', ['as'   => 'homepage.destroy', 'uses'   => 'SiteController@destroy']);


    //    Route::get('/link1', function ()    {
//        // Uses Auth Middleware
//    });

    //Please do not remove this if you want adminlte:route and adminlte:link commands to works correctly.
    #adminlte_routes
});
