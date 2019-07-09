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

/*Route::get('/', function () {
    return view('welcome');
});

Route::get('role',[
   'middleware' => 'Role:admin',
   'uses' => 'TestController@index',
]);

Route::get('/user/path',[
   'middleware' => 'First',
   'uses' => 'UserController@showPath'
]);

Route::resource('my','MyController');

Route::get('json',function(){
   return response()->json(['name' => 'Virat Gandhi', 'state' => 'Gujarat']);
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/services', function () {
    return view('services');
});

Route::get('/gallery', function () {
    return view('gallery');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/login', function () {
    return view('login');
});
*/


/*PAYROLL AYU AMIZAH*/
Route::group( ['middleware' => 'auth' ], function()
{
  /*Route::post('/doLogin', [
     'uses' => 'LoginController@doLogin'
  ]);

  Route::get('/login', function () {
      return view('login');
  });*/

  Route::get('/', [
     'uses' => 'DashboardController@index'
  ]);
  
  Route::get('/dashboard', [
     'uses' => 'DashboardController@index'
  ]);

  Route::get('/new-employee', function () {
      return view('new-employee');
  });

  Route::get('/all-employee', [
     'uses' => 'EmployeeController@showAll'
  ]);

  Route::post('/submit-employee', [
     'uses' => 'EmployeeController@submit'
  ]);

  Route::get('/form', function () {
      return view('forms');
  });

  Route::get('/salary', function () {
      return view('salary');
  });

  Route::post('/submitform', [
     'uses' => 'DailyTimesheet@submit'
  ]);

  Route::get('/edit_employee/{id}', [
     'uses' => 'EmployeeController@edit'
  ]);

  Route::get('/upload-main-fp', [
     'uses' => 'MainFPController@showAll'
  ]);

  Route::get('/edit_main_fp', [
     'uses' => 'MainFPController@deleteFp'
  ]);

  Route::post('/doUpload-main-fp', [
     'uses' => 'MainFPController@upload'
  ]);

  // Route::get('/edit_employee', function () {
  //     return view('edit_employee');
  // });
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes(['register' => false]);
