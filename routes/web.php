<?php

use App\Http\Controllers\Auth\LoginController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\Studentcontroller;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ContactFormController;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

Route::group(
    [
    'prefix' => LaravelLocalization::setLocale(),
    'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function(){
                    Route::get('/', function () {
                        return view('welcome');
                    });
                    Route::get('contact', function () {
                        return view('contactForm');
                    });
                    // Route::get( 'marwa/{id?}', function ($id=0) {
                    //     return  ('welcome to my first website'.$id);

                    // });

                    Route::get( 'shaimaa/{id?}', function ($id=0) {
                        return  ('welcome to my first website'.$id);
                    })->where(['id' => '[0-9]+']);

                    /*Route::get( 'marwa/{id?}', function ($id=0) {
                        return  ('welcome to my first website'.$id);
                    })->whereNumber('id');*/

                    Route::get('course/{name}', function($name) {
                        return 'My name is: '.$name;
                    })->whereIn('name',['shaimaa','sara']);

                    Route::prefix('cars')->group(function () {
                        Route::get('BMW', function () {
                            return 'BMW';
                        });
                        Route::get('MERCEDES', function () {
                            return 'MERCEDES';
                        });
                    });

                    // Route::fallback(function () {
                    //     // return '404 Not Found';
                    //     return redirect('shaimaa');
                    // });
                    Route::get('test20', function () {
                        return view('test');
                    });
                    Route::get('form', function () {
                        return view('form');
                    });
                    Route::post('recForm1', [MyController::class,'receiveData'])->name('form');
                    Route::get('test10',[MyController::class,'my_data']);
                    Route::get('mySession',[MyController::class,'myval']);
                    Route::get('sessionVal',[MyController::class,'restoreVal']);
                    Route::get('deleteVal',[MyController::class,'deleteVal']);
                    Route::get('sentClientMail',[MyController::class,'sentClientMail']);
                    Route::post('/submit-contact-form', [ContactFormController::class,'send'])->name('contact.send');
                    Route::post('/submit-name-login', [LoginController::class,'name'])->name('login.name');

                    // Clients
                    Route::post('insertClient',[ClientController::class,'store'])->name('insertClient');
                    Route::get('addClient',[ClientController::class,'create'])->name('addClient');
                    Route::get('clients',[ClientController::class,'index'])->name('clients');  //middleware('verified')->
                    Route::get('editClients/{id}',[ClientController::class,'edit'])->name('editClients');
                    Route::put('updateClients/{id}',[ClientController::class,'update'])->name('updateClients');
                    Route::get('showClient/{id}',[ClientController::class,'show'])->name('showClient');
                    Route::delete('delClient',[ClientController::class,'destroy'])->name('delClient');
                    Route::get('trashedClients',[ClientController::class,'trash'])->name('trashedClients');
                    Route::get('restoreClient/{id}',[ClientController::class,'restore'])->name('restoreClient');
                    Route::delete('forceDeleteClient',[ClientController::class,'forceDelete'])->name('forceDeleteClient');

                    // Students

                    Route::post('insertStudent',[Studentcontroller::class,'store'])->name('insertStudent');
                    Route::get('addStudent',[Studentcontroller::class,'create'])->name('addStudent');
                    Route::get('students',[Studentcontroller::class,'index'])->name('students');
                    Route::get('editStudent/{id}',[Studentcontroller::class,'edit'])->name('editStudent');
                    Route::put('updateStudent/{id}',[Studentcontroller::class,'update'])->name('updateStudent');
                    Route::get('showStudent/{id}',[Studentcontroller::class,'show'])->name('showStudent');
                    Route::delete('delStudent',[Studentcontroller::class,'destroy'])->name('delStudent');
                    Route::get('trashedStudents',[Studentcontroller::class,'trash'])->name('trashedStudents');
                    Route::get('restoreStudent/{id}',[Studentcontroller::class,'restore'])->name('restoreStudent');
                    Route::delete('forceDeleteStudent',[Studentcontroller::class,'forceDelete'])->name('forceDeleteStudent');

                    Route::get('/users', [UserController::class, 'index']);
                    Auth::routes(['verify'=>true]);

                    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

                    Route::get('/auth/redirect', function () {return Socialite::driver('facebook')->redirect();})->name('facebookRedirect'); //go to facebook
                    Route::get('/auth/callback', function () {$user = Socialite::driver('facebook')->user();}); //get array of data from facebook

});