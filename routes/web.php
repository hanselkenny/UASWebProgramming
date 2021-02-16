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


Route::get('/', 'ArticleController@articlelist')->name('articlelist');


Auth::routes([ 'verify' => true ]);

Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');

/* --------------------- Common/User Routes END -------------------------------- */

/* ----------------------- Admin Routes START -------------------------------- */

Route::prefix('/admin')->name('admin.')->namespace('Admin')->group(function(){

    /**
     * Admin Auth Route(s)
     */
    Route::namespace('Auth')->group(function(){

        //Login Routes
        Route::get('/login','LoginController@showLoginForm')->name('login');
        Route::post('/login','LoginController@login');
        Route::post('/logout','LoginController@logout')->name('logout');


        //Forgot Password Routes
        Route::get('/password/reset','ForgotPasswordController@showLinkRequestForm')->name('password.request');
        Route::post('/password/email','ForgotPasswordController@sendResetLinkEmail')->name('password.email');

        //Reset Password Routes
        Route::get('/password/reset/{token}','ResetPasswordController@showResetForm')->name('password.reset');
        Route::post('/password/reset','ResetPasswordController@reset')->name('password.update');

        // Email Verification Route(s)
        Route::get('email/verify','VerificationController@show')->name('verification.notice');
        Route::get('email/verify/{id}','VerificationController@verify')->name('verification.verify');
        Route::get('email/resend','VerificationController@resend')->name('verification.resend');

    });

    Route::get('/dashboard','HomeController@index')->name('home')->middleware('auth:admin');
    //Route::get('/transaction/list','TransactionController@admintransactionlist')->name('transactionlist')->middleware('auth:admin');

    //Put all of your admin routes here...

    Route::get('/user/list', 'UserListController@userList')->name('userlist')->middleware('auth:admin');
    Route::get('/user/delete/{id}', 'UserListController@deleteUser')->name('deleteuser')->middleware('auth:admin');
});

Route::get('/articlelist', 'ArticleController@Articlelist');
Route::get('/article/detail/{id}', 'ArticleController@detail');
Route::get('/article/category/{id}', 'ArticleController@category');
Route::get('/article/add','ArticleController@add')->name('addarticle')->middleware('auth');
Route::get('/article/managearticle','ArticleController@managearticlelist')->name('managearticle')->middleware('auth');
Route::post('/article/saveadd','ArticleController@saveadd')->name('saveadd')->middleware('auth');
Route::get('/user/article/delete/{id}','ArticleController@delete')->name('delete')->middleware('auth');
/* ----------------------- Admin Routes END -------------------------------- */

Route::prefix('/user')->name('user.')->namespace('User')->group(function(){


    Route::get('/dashboard','HomeController@indexUser')->name('home')->middleware('auth');
    Route::get('/profile','ProfileController@getprofile')->name('profile')->middleware('auth');
    Route::post('/profile/saveedit','ProfileController@saveprofile')->name('saveprofile')->middleware('auth');

    //Put all of your admin routes here...

});

/* ----------------------- Admin Routes END -------------------------------- */


