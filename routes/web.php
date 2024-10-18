<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index1');
});
Route::get('/index2', function () {
    return view('index2');
});
Route::get('/index3', function () {
    return view('index3');
});

Route::get('/widgets', function() {
    return view('pages.widgets');
});

Route::get('/kanban', function() {
    return view('pages.kanban');
});

Route::get('/calendar', function() {
    return view('pages.calendar');
});