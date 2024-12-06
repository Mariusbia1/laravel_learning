<?php

use App\Http\Controllers\JobController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionController;
use App\Jobs\TranslateJob;
use App\Mail\JobPosted;
use App\Models\Job;

 Route::get('test', function(){
    $job = Job::first();
    TranslateJob::dispatch($job);
     return 'Done';
 });

Route::view('/', 'home' );

 Route::resource('jobs', JobController::class);
 //->middleware('auth');

Route::view('/contact', 'contact');

//Auth

Route::get('/register',[RegisterController::class,'create']);
Route::post('/register',[RegisterController::class,'store']);

Route::get('/login',[SessionController::class,'create'])->name('login');
Route::post('/login',[SessionController::class,'store']);
Route::post('/logout',[SessionController::class,'destroy']);
