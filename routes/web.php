<?php


Route::get('/', function () {
    return view('welcome');

});



Route::prefix('lottery')->group(function(){
    Route::any('index','test\LotteryController@index');
    Route::any('test','test\LotteryController@test'); //分库测试 
});