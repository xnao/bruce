<?php
Route::group(['prefix'=>'admin','namespace'=>'admin'],function(){
   Route::get('',['uses'=>'IndexController@index']);
});