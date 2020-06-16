<?php

use App\Mail\WelcomeMail;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;


// Route::get('/email', function(){
//     Mail::to('email@email.com')->send(new WelcomeMail());

//     return new WelcomeMail;
// });

Route::get('email', 'MailController@store');

// Auth::routes();

// Route::get('/', 'HomeController@dashboard')->name('home');
Route::get('/', 'MailController@index');

Route::get('index', 'EmployeesController@index');
Route::get('addemployee', 'EmployeesController@addemployee');
Route::post('addemployee/store', 'EmployeesController@store');
Route::get('listemployee', 'EmployeesController@listemployee');
Route::get('listemployee/{id}', 'EmployeesController@show');
Route::get('listemployee/{id}/edit', 'EmployeesController@edit');
Route::put('listemployee/{id}/update', 'EmployeesController@update');
Route::delete('listemployee/{id}/delete', 'EmployeesController@destroy');
Route::get('listemployee/{id}/delete', ['as' => 'employees.delete', 'uses' => 'EmployeesController@destroy']);

Route::get('my-demo-mail','TestController@myDemoMail');
