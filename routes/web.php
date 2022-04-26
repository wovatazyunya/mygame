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

Route::get('/', 'Auth\LoginController@showLoginForm');

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::group(['middleware' => 'auth'], function () {



    Route::get('game', 'User\GameController@load');

    Route::get('/game/top', 'User\GameController@top');

    Route::get('/game/tutorial', 'User\GameController@tutorial');

    Route::get('/game/playerSelect', 'User\GameController@playerSelect');

    Route::get('game/noUse', 'User\GameController@noUse');

    Route::get('game/cantUse', 'User\GAmeController@cantUse');

    Route::get('/game/playGokurakutyou', 'User\GameController@playGokurakutyou');

    Route::get(
        '/game/winGokurakutyou',
        'User\GameController@winGokurakutyou'
    );

    Route::get(
        '/game/loseGokurakutyou',
        'User\GameController@loseGokurakutyou'
    );

    Route::get(
        '/game/playKujaku',
        'User\GameController@playKujaku'
    );

    Route::get(
        '/game/winKujaku',
        'User\GameController@winKujaku'
    );

    Route::get(
        '/game/loseKujaku',
        'User\GameController@loseKujaku'
    );

    Route::get(
        'game/playKatakake',
        'User\GameController@playKatakake'
    );

    Route::get(
        'game/winKatakake',
        'User\GameController@winKatakake'
    );

    Route::get(
        'game/loseKatakake',
        'User\GameController@loseKatakake'
    );

    Route::get(
        'game/playMaiko',
        'User\GameController@playMaiko'
    );

    Route::get(
        'game/winMaiko',
        'User\GameController@winMaiko'
    );

    Route::get(
        'game/loseMaiko',
        'User\GameController@loseMaiko'
    );

    Route::get(
        'game/playTancyou',
        'User\GameController@playTancyou'
    );

    Route::get(
        'game/winTancyou',
        'User\GameController@winTancyou'
    );

    Route::get(
        'game/loseTancyou',
        'User\GameController@loseTancyou'
    );

    Route::get(
        'game/playKarasu',
        'User\GameController@playKarasu'
    );

    Route::get(
        'game/winKarasu',
        'User\GameController@winKarasu'
    );

    Route::get(
        'game/loseKarasu',
        'User\GameController@loseKarasu'
    );

    Route::get('/game/shop', 'User\GameController@shop');

    Route::get(
        '/game/ending',
        'User\GameController@ending'
    );

    Route::get(
        '/game/result',
        'User\GameController@result'
    );

    Route::post(
        '/game/addpoint',
        'User\GameController@addpoint'
    );

    Route::post(
        '/game/buymaiko',
        'User\GameController@buyMaiko'
    );
});
