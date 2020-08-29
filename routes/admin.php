 <?php

/*
|--------------------------------------------------------------------------
| Web Admin Panel Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */

app()->singleton('admin', function () {
		return 'admin';
	});

\L::Panel(app('admin'));/// Set Lang redirect to admin
\L::LangNonymous();// Run Route Lang 'namespace' => 'Admin',

Route::group(['prefix' => app('admin'), 'middleware' => 'Lang'], function () {

		Route::get('theme/{id}', 'Admin\Dashboard@theme');
		Route::group(['middleware' => 'admin_guest'], function () {

				Route::get('login', 'Admin\AdminAuthenticated@login_page');
				Route::post('login', 'Admin\AdminAuthenticated@login_post')->name('login_data');

				Route::post('reset/password', 'Admin\AdminAuthenticated@reset_password');
				Route::get('password/reset/{token}', 'Admin\AdminAuthenticated@reset_password_final');
				Route::post('password/reset/{token}', 'Admin\AdminAuthenticated@reset_password_change');
			});
		/*
		|--------------------------------------------------------------------------
		| Web Routes
		|--------------------------------------------------------------------------
		| Do not delete any written comments in this file
		| These comments are related to the application (it)
		| If you want to delete it, do this after you have finished using the application
		| For any errors you may encounter, please go to this link and put your problem
		| phpanonymous.com/it/issues
		 */

		Route::group(['middleware' => 'admin:admin'], function () {

				Route::group(['prefix' => 'filemanager'], function () {
						\UniSharp\LaravelFilemanager\Lfm::routes();
					});

				//////// Admin Routes /* Start */ //////////////
				Route::get('/', 'Admin\Dashboard@home');
				Route::any('logout', 'Admin\AdminAuthenticated@logout');

				Route::get('account', 'Admin\AdminAuthenticated@account');
				Route::post('account', 'Admin\AdminAuthenticated@account_post');
				Route::resource('settings', 'Admin\Settings');

				Route::resource('causes','Admin\CausesController'); 
Route::post('causes/multi_delete','Admin\CausesController@multi_delete'); 
				Route::resource('causestype','Admin\CausesTypeController'); 
Route::post('causestype/multi_delete','Admin\CausesTypeController@multi_delete'); 
				Route::resource('about','Admin\AboutController'); 
Route::post('about/multi_delete','Admin\AboutController@multi_delete'); 
				Route::resource('blog','Admin\BlogController'); 
Route::post('blog/multi_delete','Admin\BlogController@multi_delete'); 
				Route::resource('member','Admin\MemberController'); 
Route::post('member/multi_delete','Admin\MemberController@multi_delete'); 
				Route::resource('manger','Admin\MangerController'); 
Route::post('manger/multi_delete','Admin\MangerController@multi_delete'); 

				Route::resource('volunteerscontoller','Admin\VolunteersContoller'); 
				Route::post('ViewPdf','Admin\VolunteersContoller@ViewPdf')->name('ViewPdf'); 
Route::post('volunteerscontoller/multi_delete','Admin\VolunteersContoller@multi_delete'); 
				Route::resource('message','Admin\MessageController'); 
Route::post('message/multi_delete','Admin\MessageController@multi_delete'); 
				//////// Admin Routes /* End */ //////////////
			});

	});
