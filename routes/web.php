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

Route::get('/cons',function(){
	return Config::get('app.timezone');
});

// Route::get('/goods/{id}',function($id){

// 	echo $id;

// })->where('id','[0-9]+');
Route::get('/goods/{id}/{price}',function($id,$price){

	// echo $id,$price;

	return redirect()-> route('ls');

})->where(['id'=>'\d{1,4}','price'=>'\d{1,3}']);

Route::get('/admin/user/imput/local/hello',['as'=>'ls',function(){
	echo route('ls');
	echo url('/sdf/sdf/sadf');
	echo 123;
}]);

Route::get('/form',function(){

	return view('form');
});

Route::post('/form/add',function(){
	echo 1232354;
});
Route::post('form/ajax',function(){
	echo 1;
});
Route::group(['middleware'=>'login'],function(){
/*
	Route::get('/admin',function(){
		echo ('这是后台页面');
	});
	Route::get('/admin/index',function(){
		echo '后台列表页';
	});*/
	Route::get('/admin/user/add','UserController@add');
	Route::post('/admin/user/insert','UserController@insert');
	Route::get('/admin/user/index',['uses'=>'UserController@index','as'=>'index']);
	Route::resource('/test','TestController');
});

Route::group(['middleware'=>'login'],function(){

	Route::get('/home',function(){
		echo ('这是前台页面');
	});
	Route::get('/home/index',function(){
		echo '前台列表页';
	});
});

Route::get('/503',function(){
	abort(503);
});

Route::get('/middle',['middleware'=>'login',function(){

	echo '中间件测试';
}]);

Route::get('/ses',function(){
	return session(['id'=>'aa']);
});

Route::get('/login',function(){
	echo '没有通过中间件测试';
});