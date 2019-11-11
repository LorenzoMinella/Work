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
Route::get('faaqs', ['as'             => 'companies.questions', 'uses'           => 'SiteController@faqs']);
Route::get('blog', ['as'             => 'companies.blog', 'uses'           => 'SiteController@blog']);
Route::get('blog/post/{id}', ['as'             => 'post.blog', 'uses'           => 'PostController@post_view']);
Route::get('comparator', ['as'             => 'companies.comparator', 'uses'           => 'SiteController@comparator']);
Route::get('comparator_camino/{id}', ['as'             => 'companies.comparator_camino', 'uses'           => 'SiteController@comparator_camino']);
Route::post('comparator', ['as'   => 'comparator.store', 'uses'   => 'SiteController@store_comparator']);
Route::get('aboutus', ['as'             => 'companies.about_us', 'uses'           => 'SiteController@about_us']);
Route::get('policies', ['as'             => 'companies.policies', 'uses'           => 'SiteController@policies']);
Route::get('contact', ['as'             => 'companies.contact', 'uses'           => 'SiteController@contact']);
Route::get('glosary', ['as'             => 'companies.glosary', 'uses'           => 'SiteController@glosary']);
Route::post('advertise', ['as'   => 'advertise.store', 'uses'   => 'SiteController@advertise_store']);
Route::post('contact', ['as'   => 'contact.store', 'uses'   => 'SiteController@contact_store']);


Route::group(['middleware' => 'auth'], function () {

		Route::get('roles', ['as'           => 'roles.index', 'uses'           => 'RoleController@index']);
		Route::get('roles/create', ['as'    => 'roles.create', 'uses'    => 'RoleController@create']);
		Route::post('roles/create', ['as'   => 'roles.store', 'uses'   => 'RoleController@store']);
		Route::get('roles/{id}', ['as'      => 'roles.show', 'uses'      => 'RoleController@show']);
		Route::get('roles/{id}/edit', ['as' => 'roles.edit', 'uses' => 'RoleController@edit']);
		Route::patch('roles/{id}', ['as'    => 'roles.update', 'uses'    => 'RoleController@update']);
		Route::delete('roles/{id}', ['as'   => 'roles.destroy', 'uses'   => 'RoleController@destroy']);

		Route::get('leads', ['as'           => 'leads.index', 'uses'           => 'LeadController@index']);
		Route::get('leads/{id}', ['as'      => 'leads.show', 'uses'      => 'LeadController@show']);
		Route::get('leads/{id}/edit', ['as' => 'leads.edit', 'uses' => 'LeadController@edit']);
		Route::patch('leads/{id}', ['as'    => 'leads.update', 'uses'    => 'LeadController@update']);
		Route::delete('leads/{id}', ['as'   => 'leads.destroy', 'uses'   => 'LeadController@destroy']);


		Route::get('glosaries', ['as'           => 'glosaries.index', 'uses'           => 'GlosaryController@index']);
		Route::get('glosaries/create', ['as'    => 'glosary.create', 'uses'    => 'GlosaryController@create']);
		Route::post('glosaries/create', ['as'   => 'glosaries.store', 'uses'   => 'GlosaryController@store']);
		Route::get('glosaries/{id}', ['as'      => 'glosary.show', 'uses'      => 'GlosaryController@show']);
		Route::get('glosaries/{id}/edit', ['as' => 'glosaries.edit', 'uses' => 'GlosaryController@edit']);
		Route::patch('glosaries/{id}', ['as'    => 'glosaries.update', 'uses'    => 'GlosaryController@update']);
		Route::delete('glosaries/{id}', ['as'   => 'glosaries.destroy', 'uses'   => 'GlosaryController@destroy']);		

		Route::get('faqs', ['as'           => 'faqs.index', 'uses'           => 'FaqController@index']);
		Route::get('faqs/create', ['as'    => 'faqs.create', 'uses'    => 'FaqController@create']);
		Route::post('faqs/create', ['as'   => 'faqs.store', 'uses'   => 'FaqController@store']);
		Route::get('faqs/{id}/edit', ['as' => 'faqs.edit', 'uses' => 'FaqController@edit']);
		Route::patch('faqs/{id}', ['as'    => 'faqs.update', 'uses'    => 'FaqController@update']);
		Route::delete('faqs/{id}', ['as'   => 'faqs.destroy', 'uses'   => 'FaqController@destroy']);


		Route::get('faqs/categories', ['as'           => 'faqs_categories.index', 'uses'           => 'FaqCategoryController@index']);
		Route::get('faqs/categories/create', ['as'    => 'faqs_categories.create', 'uses'    => 'FaqCategoryController@create']);
		Route::post('faqs/categories/create', ['as'   => 'faqs_categories.store', 'uses'   => 'FaqCategoryController@store']);
		Route::get('faqs/categories/{id}/edit', ['as' => 'faqs_categories.edit', 'uses' => 'FaqCategoryController@edit']);
		Route::patch('faqs/categories/{id}', ['as'    => 'faqs_categories.update', 'uses'    => 'FaqCategoryController@update']);
		Route::delete('faqs/categories/{id}', ['as'   => 'faqs_categories.destroy', 'uses'   => 'FaqCategoryController@destroy']);



		Route::get('questions/{id}', ['as'           => 'questions.index', 'uses'           => 'QuestionController@index']);
		Route::get('questions/create', ['as'    => 'questions.create', 'uses'    => 'QuestionController@create']);
		Route::post('questions/create', ['as'   => 'questions.store', 'uses'   => 'QuestionController@store']);
		Route::get('questions/{id_question}/{id_form}/edit', ['as' => 'questions.edit', 'uses' => 'QuestionController@edit']);
		Route::patch('questions/{id}', ['as'    => 'questions.update', 'uses'    => 'QuestionController@update']);
		Route::delete('questions/{id}', ['as'   => 'questions.destroy', 'uses'   => 'QuestionController@destroy']);

		Route::get('questions_short/{id}', ['as'           => 'questions_short.index', 'uses'           => 'QuestionController@index_corto']);
		Route::get('questions_short/create', ['as'    => 'questions_short.create', 'uses'    => 'QuestionController@create']);
		Route::post('questions_short/create', ['as'   => 'questions_short.store', 'uses'   => 'QuestionController@store_short']);
		Route::get('questions_short/{id_question}/{id_form}/edit', ['as' => 'questions_short.edit', 'uses' => 'QuestionController@edit_corto']);
		Route::patch('questions_short/{id}', ['as'    => 'questions_short.update', 'uses'    => 'QuestionController@update_corto']);
		Route::delete('questions_short/{id}', ['as'   => 'questions_short.destroy', 'uses'   => 'QuestionController@destroy_short']);
		Route::get('answers_short/{id}/{form_id}/index', ['as' => 'answers_short.index', 'uses' => 'AnswerController@index_corto']);
		Route::post('answers_short/create', ['as'   => 'answers_short.store', 'uses'   => 'AnswerController@store_corto']);
		Route::delete('answers_short/{id}', ['as'   => 'answers_short.destroy', 'uses'   => 'AnswerController@destroy_corto']);
		Route::get('answers_short/{id_question}/{id_form}/{id_answer}/edit', ['as' => 'answers_short.edit', 'uses' => 'AnswerController@edit_corto']);
		Route::patch('answers_short/{id}', ['as'    => 'answers_short.update', 'uses'    => 'AnswerController@update_corto']);

		Route::get('answers/{id}/{form_id}/index', ['as' => 'answers.index', 'uses' => 'AnswerController@index']);
//		Route::get('answers/{id}/create', ['as'    => 'answers.create', 'uses'    => 'AnswerController@create']);
		Route::post('answers/create', ['as'   => 'answers.store', 'uses'   => 'AnswerController@store']);
		Route::get('answers/{id_question}/{id_form}/{id_answer}/edit', ['as' => 'answers.edit', 'uses' => 'AnswerController@edit']);
		Route::patch('answers/{id}', ['as'    => 'answers.update', 'uses'    => 'AnswerController@update']);
		Route::delete('answers/{id}', ['as'   => 'answers.destroy', 'uses'   => 'AnswerController@destroy']);

		Route::get('forms', ['as'           => 'forms.index', 'uses'           => 'FormController@index']);
		Route::get('forms/create', ['as'    => 'forms.create', 'uses'    => 'FormController@create']);
		Route::post('forms/create', ['as'   => 'forms.store', 'uses'   => 'FormController@store']);
		Route::get('forms/{id}/edit', ['as' => 'forms.edit', 'uses' => 'FormController@edit']);
		Route::patch('forms/{id}', ['as'    => 'forms.update', 'uses'    => 'FormController@update']);
		Route::delete('forms/{id}', ['as'   => 'forms.destroy', 'uses'   => 'FormController@destroy']);
		Route::get('forms/modificaEstado/{id}', ['as' => 'form.modificaEstado', 'uses'      => 'FormController@modificaEstado']);


		Route::get('way/{id}', ['as'           => 'way.index', 'uses'           => 'FormController@way']);
		Route::get('forms_questions_answers/{id}', ['as'           => 'forms_questions_answers.index', 'uses'           => 'FormController@forms_questions_answers']);
		Route::post('forms_questions_answers', ['as'   => 'forms_questions_answers.store', 'uses'   => 'FormController@store_camino']);

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

		Route::get('advertises/index', ['as'      => 'advertises.index', 'uses'           => 'AdvertiseController@index']);
		Route::get('advertises/{id}/create', ['as'    => 'advertises.create', 'uses'    => 'AdvertiseController@create']);
		Route::get('advertises/{id}/edit', ['as' => 'advertises.edit', 'uses' => 'AdvertiseController@edit']);
		Route::patch('advertises/{id}', ['as'    => 'advertises.update', 'uses'    => 'AdvertiseController@update']);
		Route::delete('advertises/{id}', ['as'   => 'advertises.destroy', 'uses'   => 'AdvertiseController@destroy']);

		Route::get('contact/index', ['as'      => 'contact.index', 'uses'           => 'ContactController@index']);
		Route::get('contact/{id}/create', ['as'    => 'contact.create', 'uses'    => 'ContactController@create']);
		Route::get('contact/{id}/edit', ['as' => 'contact.edit', 'uses' => 'ContactController@edit']);
		Route::patch('contact/{id}', ['as'    => 'contact.update', 'uses'    => 'ContactController@update']);
		Route::delete('contact/{id}', ['as'   => 'contact.destroy', 'uses'   => 'ContactController@destroy']);		

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
