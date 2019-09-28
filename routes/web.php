<?php


Route::get('/', function () {
    return view('welcome');

});



Route::prefix('lottery')->group(function(){
    Route::any('index','test\LotteryController@index');
    Route::any('test','test\LotteryController@test'); //分库测试
});

Route::prefix('1812')->group(function(){
    Route::any('reg','test\LoginCotroller@reg'); //注册
    Route::any('regdo','test\LoginCotroller@regdo'); //注册执行
    Route::any('login','test\LoginCotroller@login');//登录展示
    Route::any('logindo','test\LoginCotroller@logindo');//执行登录
    Route::any('index','test\LoginCotroller@index');//执行登录
});
