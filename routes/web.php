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

Route::post('/charge', 'ChargeController@charge');


Route::get('/', function () {
    return view('welcome');
});

Route::get('/ichiropage', function () {
    return view('ichiropage');
});

Route::get('/home', 'HomeController@index')->name('home');


Auth::routes();



//ログイン済み//
Route::group(['middleware' => ['auth']], function () {
   

Route::get('/loginIchiro', function () {
    return view('loginIchiro');
});

Route::get('/mypage', function () {
    return view('mypage');
});
 
 

});

// Stripeの処理
Route::post('/payment', 'PaymentsController@payment')->name('payment');

// 決済完了ページ
Route::get('/complete', 'PaymentsController@complete')->name('complete');

//登録情報の設定
Route::get('/setting', 'SettingController@index')->name('setting');
 




//  // 課金
//  Route::get('subscription', 'User\SubscriptionController@index');
//  Route::get('ajax/subscription/status', 'User\Ajax\SubscriptionController@status');
//  Route::post('ajax/subscription/subscribe', 'User\Ajax\SubscriptionController@subscribe');
//  Route::post('ajax/subscription/cancel', 'User\Ajax\SubscriptionController@cancel');
//  Route::post('ajax/subscription/resume', 'User\Ajax\SubscriptionController@resume');
//  Route::post('ajax/subscription/change_plan', 'User\Ajax\SubscriptionController@change_plan');
//  Route::post('ajax/subscription/update_card', 'User\Ajax\SubscriptionController@update_card');


// Route::get('/subscription', function () {
//     return view('subscription');
// });





