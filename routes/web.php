<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

Route::get('/', function () {
    return view('welcome');
});

Volt::route('/nosotros', 'public.nosotros')->name('nosotros');
Volt::route('/menu', 'public.menu')->name('menu');
Volt::route('/galeria', 'public.galeria')->name('galeria');
Volt::route('/reservas', 'public.reservas')->name('reservas');

Volt::route('/admin', 'admin.dashboard')->name('admin.dashboard');
Volt::route('/admin/reservas', 'admin.reservas')->name('admin.reservas');
Volt::route('/admin/menu', 'admin.menu')->name('admin.menu');
