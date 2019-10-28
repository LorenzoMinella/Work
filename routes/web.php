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
Route::get('company/list', ['as'             => 'companies.list', 'uses'           => 'SiteController@companies_list']);
Route::get('company/{id}', ['as'             => 'companies.profile', 'uses'           => 'SiteController@company']);
Route::get('homealarms', ['as'             => 'companies.homealarms', 'uses'           => 'SiteController@homealarms']);
Route::get('business/alarms', ['as'             => 'companies.business_alarms', 'uses'           => 'SiteController@business_alarms']);
Route::get('advertise', ['as'             => 'companies.advertise', 'uses'           => 'SiteController@advertise']);
Route::get('questions', ['as'             => 'companies.questions', 'uses'           => 'SiteController@faqs']);
Route::get('blog', ['as'             => 'companies.blog', 'uses'           => 'SiteController@blog']);
Route::get('comparator', ['as'             => 'companies.comparator', 'uses'           => 'SiteController@comparator']);
Route::get('aboutus', ['as'             => 'companies.about_us', 'uses'           => 'SiteController@about_us']);
Route::get('policies', ['as'             => 'companies.policies', 'uses'           => 'SiteController@policies']);
Route::get('contact', ['as'             => 'companies.contact', 'uses'           => 'SiteController@contact']);

Route::group(['middleware' => 'auth'], function () {

		Route::get('roles', ['as'           => 'roles.index', 'uses'           => 'RoleController@index']);
		Route::get('roles/create', ['as'    => 'roles.create', 'uses'    => 'RoleController@create']);
		Route::post('roles/create', ['as'   => 'roles.store', 'uses'   => 'RoleController@store']);
		Route::get('roles/{id}', ['as'      => 'roles.show', 'uses'      => 'RoleController@show']);
		Route::get('roles/{id}/edit', ['as' => 'roles.edit', 'uses' => 'RoleController@edit']);
		Route::patch('roles/{id}', ['as'    => 'roles.update', 'uses'    => 'RoleController@update']);
		Route::delete('roles/{id}', ['as'   => 'roles.destroy', 'uses'   => 'RoleController@destroy']);

		Route::get('faqs', ['as'           => 'faqs.index', 'uses'           => 'FaqController@index']);
		Route::get('faqs/create', ['as'    => 'faqs.create', 'uses'    => 'FaqController@create']);
		Route::post('faqs/create', ['as'   => 'faqs.store', 'uses'   => 'FaqController@store']);
		Route::get('faqs/{id}/edit', ['as' => 'faqs.edit', 'uses' => 'FaqController@edit']);
		Route::patch('faqs/{id}', ['as'    => 'faqs.update', 'uses'    => 'FaqController@update']);
		Route::delete('faqs/{id}', ['as'   => 'faqs.destroy', 'uses'   => 'FaqController@destroy']);


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

		Route::get('posts', ['as'           => 'posts.index', 'uses'           => 'PostController@index']);
		Route::get('posts/create', ['as'    => 'posts.create', 'uses'    => 'PostController@create']);
		Route::post('posts/create', ['as'   => 'posts.store', 'uses'   => 'PostController@store']);
		Route::get('posts/{id}/edit', ['as' => 'posts.edit', 'uses' => 'PostController@edit']);
		Route::patch('posts/{id}', ['as'    => 'posts.update', 'uses'    => 'PostController@update']);
		Route::delete('posts/{id}', ['as'   => 'posts.destroy', 'uses'   => 'PostController@destroy']);


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

		Route::get('advantages/{id}/index', ['as'      => 'advantages.index', 'uses'           => 'AdvantagesController@index']);
		Route::get('advantages/{id}/create', ['as'    => 'advantages.create', 'uses'    => 'AdvantagesController@create']);
		Route::post('advantages/create', ['as'   => 'advantages.store', 'uses'   => 'AdvantagesController@store']);
		Route::get('advantages/{id}/edit', ['as' => 'advantages.edit', 'uses' => 'AdvantagesController@edit']);
		Route::patch('advantages/{id}', ['as'    => 'advantages.update', 'uses'    => 'AdvantagesController@update']);
		Route::delete('advantages/{id}', ['as'   => 'advantages.destroy', 'uses'   => 'AdvantagesController@destroy']);

		Route::get('components/{id}/index', ['as'      => 'components.index', 'uses'           => 'AdvantagesController@index']);
		Route::get('components/{id}/create', ['as'    => 'components.create', 'uses'    => 'AdvantagesController@create']);
		Route::post('components/create', ['as'   => 'components.store', 'uses'   => 'AdvantagesController@store']);
		Route::get('components/{id}/edit', ['as' => 'components.edit', 'uses' => 'AdvantagesController@edit']);
		Route::patch('components/{id}', ['as'    => 'components.update', 'uses'    => 'AdvantagesController@update']);
		Route::delete('components/{id}', ['as'   => 'components.destroy', 'uses'   => 'AdvantagesController@destroy']);


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
