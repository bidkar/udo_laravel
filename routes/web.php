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

Route::get('/', function () {
    return view('welcome');
});

Route::get('home', function() {
    return view('home');
});

Route::get('test', function() {
    // $user = new App\User;
    // $user->insert([
    //     'name' => 'bidkar',
    //     'email' => 'bidkar.aragon@udo.mx',
    //     'password' => Hash::make('123')
    // ]);
    // return $user->all();
    $user = new App\User;
    // $user_id = $user->find(1)->pluck('id');
    $profile = new App\ProfileUser;
    $profile->insert([
        'user_id' => 1,
        'first_name' => 'Bidkar',
        'last_name' => 'Aragon',
        'avatar' => '',
        'twitter_user' => '@bidkarAragon',
        'facebook_user' => 'bidkarAragon'
    ]);
    return $user->profile();
});
