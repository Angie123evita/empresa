<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/services/{valido?}', function ($valido=null) {
    return view('services',['valido' => $valido]);
})->where('valido', '[A-Za-z]+')->name('servicios');

Route::get('/projects/{valido?}', function ($valido=null) {
    return view('projects',['valido' => $valido]);
})->where('valido', '[A-Za-z]+')->name('proyectos');

Route::get('/customers/{valido?}', function ($valido=null) {
    return view('customers',['valido' => $valido]);
})->where('valido', '[A-Za-z]+')->name('clientes');

Route::get('/blog/{valido?}', function ($valido=null) {
    return view('blogs',['valido' => $valido]);
})->where('valido', '[0-9]+')->name('blogs');

Route::get('/contacts', function () {
    return view('contacts');
})->name('contactos');

