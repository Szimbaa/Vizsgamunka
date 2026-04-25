<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/register', function () {
    return view('register');
})->name('register');

Route::get('/services', function () {
    return view('services');
})->name('services');

Route::get('/team', function () {
    return view('team');
})->name('team');

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');