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

// Default page (Home)
Route::get('/', function () {
    return view('user/pages/home');
});

// About
Route::get('about', function () {
    return view('user/pages/about');
});

// Account
Route::get('account', function () {
    return view('user/pages/account');
});

// Buy
Route::get('buy', function () {
    return view('user/pages/buy');
});

// Calculator
Route::get('calculator', function () {
    return view('user/pages/calculator');
});

// Dashboard
Route::get('dashboard', function () {
    return view('user/pages/dashboard');
});

// Forgot Password
Route::get('forgot_password', function () {
    return view('user/pages/forgot_password');
});

// Help Centre
Route::get('help_centre', function () {
    return view('user/pages/help_centre');
});

// Historical Prices
Route::get('historical_prices', function () {
    return view('user/pages/historical_prices');
});

// Login
Route::get('login', function () {
    return view('user/pages/login');
});

// Partnerships
Route::get('partnerships', function () {
    return view('user/pages/partnerships');
});

// Privacy
Route::get('privacy', function () {
    return view('user/pages/privacy');
});

// Register
Route::get('register', function () {
    return view('user/pages/register');
});

// Sell
Route::get('sell', function () {
    return view('user/pages/sell');
});

// Terms
Route::get('terms', function () {
    return view('user/pages/terms');
});

// Trade Buy
Route::get('trade_buy', function () {
    return view('user/pages/trade_buy');
});

// Trade Now
Route::get('trade_now', function () {
    return view('user/pages/trade_now');
});

// Trade Room
Route::get('trade_room', function () {
    return view('user/pages/trade_room');
});

// Trade Sell
Route::get('trade_sell', function () {
    return view('user/pages/trade_sell');
});

// Trade Started
Route::get('trade_started', function () {
    return view('user/pages/trade_started');
});

// Trading History
Route::get('trading_history', function () {
    return view('user/pages/trading_history');
});

// User
Route::get('user', function () {
    return view('user/pages/user');
});

// Wallet
Route::get('wallet', function () {
    return view('user/pages/wallet');
});

// Wallet (Coins)
Route::get('wallet_coins', function () {
    return view('user/pages/wallet_coins');
});
