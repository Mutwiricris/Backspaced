<?php

use Illuminate\Support\Facades\Route;

// Home Page
Route::get('/', function () {
    return view('home');
})->name('home');

// Services
Route::get('/services', function () {
    return view('services');
})->name('services');

// Portfolio
Route::get('/portfolio', function () {
    return view('portfolio');
})->name('portfolio');

// Portfolio Detail Pages
Route::get('/portfolio/somaplus', function () {
    return view('portfolio.somaplus');
})->name('portfolio.somaplus');

Route::get('/portfolio/iremit', function () {
    return view('portfolio.iremit');
})->name('portfolio.iremit');

Route::get('/portfolio/echama', function () {
    return view('portfolio.echama');
})->name('portfolio.echama');

// About
Route::get('/about', function () {
    return view('about');
})->name('about');

// Contact
Route::get('/contact', function () {
    return view('contact');
})->name('contact');

// Contact Form Submission
Route::post('/contact', function () {
    // Handle contact form submission
    // For now, just redirect back with success message
    return redirect()->back()->with('success', 'Thank you for your message! We will get back to you soon.');
})->name('contact.submit');
