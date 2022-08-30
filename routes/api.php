<?php

Route::group(['prefix' => 'api', 'namespace' => 'Adaa\Service\Controllers\Api',], function(){
	Route::get('service/check', 'CheckController@index');
});