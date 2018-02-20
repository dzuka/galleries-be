<?php
Route::get('user/verify/{verification_code}', 'AuthController@verifyUser');
Route::get('password/reset/{token?}', 'Auth\PasswordController@showResetForm');
Route::post('password/reset', 'Auth\PasswordController@reset');