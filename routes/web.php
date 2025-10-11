<?php

use Illuminate\Support\Facades\Route;
use LiveWire\Volt\Volt;
Route::get('/', function () {
    return view('welcome');
});


// 詳細ページ
volt::route('/memos/{memo}', 'memos.show')->name('me mos.show');
