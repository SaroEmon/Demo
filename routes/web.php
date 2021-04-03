<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Backend\DoctorsController;
use App\Http\Controllers\Backend\NursesController;
use App\Http\Controllers\Backend\MedicinesController;
use App\Http\Controllers\Backend\PharmaciesController;
use App\Http\Controllers\Backend\PrescriptionsController;
use App\Http\Controllers\Backend\PatientsController;


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
Route::post('/doctors/list',[DoctorsController::class,'doctorsList'])->name('doctors.list');



//NURSE
Route::get('/nurses',[NursesController::class,'nurses'])->name('nurses');
Route::get('/nurses/create',[NursesController::class,'nursesCreate'])->name('nurses.create');




//MEDICINE
Route::get('/medicines',[MedicinesController::class,'medicines'])->name('medicines');
Route::get('/medicines/create',[MedicinesController::class,'medicinesCreate'])->name('medicines.create');


//PHARMACY
Route::get('/pharmacy',[PharmaciesController::class,'pharmacies'])->name('pharmacies');
Route::get('/pharmacy/create',[PharmaciesController::class,'pharmaciesCreate'])->name('pharmacies.create');


//PRESCRIPTION
Route::get('/prescriptions',[PrescriptionsController::class,'prescriptions'])->name('prescriptions');
Route::get('/prescription/create',[PrescriptionsController::class,'prescriptionsCreate'])->name('prescriptions.create');


//PATIENT

Route::get('/patients',[PatientsController::class,'patients'])->name('patients');
Route::get('/patients/create',[PatientsController::class,'patientsCreate'])->name('patients.create');





