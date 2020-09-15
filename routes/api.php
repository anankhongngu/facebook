<?php

use Illuminate\Http\Request;


Route::middleware('auth:api')->group(function() {
	
	// Route::get('/user', function (Request $request) {
	//     return $request->user();
	// });

	// Route::get('/posts', 'PostController@index');

	// Route::post('/posts', 'PostController@store');

	
	Route::get('auth-user', 'AuthUserController@show');

	Route::apiResources([
		'/posts' => 'PostController',
		'/users' => 'UserController',
		'/users/{user}/posts' => 'UserPostController',	
	]);

});
	