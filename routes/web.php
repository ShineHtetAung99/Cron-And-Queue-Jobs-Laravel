<?php

use App\Mail\SubscriberMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

$users = ['mgmg@gmail.com','aungaung@gmail.com','tuntun@gmail.com','hlahla@gmail.com'];
Route::get('/send-mail', function () use($users) {
    foreach ($users as $user) {
        Mail::to($user)->queue(new SubscriberMail('hello'));
    }
    return redirect('/');
});
