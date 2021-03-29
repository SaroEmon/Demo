<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Backend\DoctorsController;
use App\Http\Controllers\Backend\NursesController;
use App\Http\Controllers\Backend\PatientsController;
use App\Http\Controllers\Backend\PharmaciesController;
use App\Http\Controllers\Backend\PrescriptionsController;
use App\Http\Controllers\Backend\MedicinesController;


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

Route::get('/', function () {
    return view('welcome');
});


//DOCTORS

Route::get('/doctors',[DoctorsController::class,'doctors'])->name('doctors');
Route::get('/doctors/create',[DoctorsController::class,'doctorsCreate'])->name('doctors.create');




//NURSE
Route::get('/nurses',[NursesController::class,'nurses'])->name('nurses');


Route::get('/patients',[PatientsController::class,'patients'])->name('patients');
Route::get('/pharmacy',[PharmaciesController::class,'pharmacies'])->name('pharmacies');
Route::get('/prescriptions',[PrescriptionsController::class,'prescriptions'])->name('prescriptions');
Route::get('/medicines',[MedicinesController::class,'medicines'])->name('medicines');






