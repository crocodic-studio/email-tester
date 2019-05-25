<?php

use Illuminate\Support\Facades\Route;

if(env("EMAIL_TESTER", true)===true) {
    Route::group([
        'middleware' => ['web'],
        'prefix' => "/",
        'namespace' => 'crocodicstudio\emailtester\controllers',
    ], function () {
        Route::get("email-tester", "EmailTesterController@getIndex");
        Route::post("email-tester", "EmailTesterController@postSend");
    });
}