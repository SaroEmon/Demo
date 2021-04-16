<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Backend\DoctorsController;
use App\Http\Controllers\Backend\NursesController;
use App\Http\Controllers\Backend\MedicinesController;
use App\Http\Controllers\Backend\PharmaciesController;
use App\Http\Controllers\Backend\PrescriptionsController;
use App\Http\Controllers\Backend\PatientsController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Backend\ReceiptionistsController;





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
//DASHBOARD (website) / frontend routes
Route::get('/',[HomeController::class,'home'])->name('homepage');






//ADMIN PANNEL ROUTE
Route::group(['prefix'=>'admin'],function (){


//DASHBOARD (control panel BACKEND)

        Route::get('/', [DashboardController::class, 'adminHome'])->name('home');

//DOCTORS

        Route::get('/doctors', [DoctorsController::class, 'doctors'])->name('doctors');
        Route::get('/doctors/create', [DoctorsController::class, 'doctorsCreate'])->name('doctors.create');
        Route::post('/doctors/list', [DoctorsController::class, 'doctorsList'])->name('doctors.list');
        Route::get('/doctor/delete/{id}',[DoctorsController::class,'doctorDelete'])->name('doctor.delete');


//NURSE
        Route::get('/nurses', [NursesController::class, 'nurses'])->name('nurses');
        Route::get('/nurses/create', [NursesController::class, 'nursesCreate'])->name('nurses.create');
        Route::post('/nurses/list', [NursesController::class, 'nursesList'])->name('nurses.list');
        Route::get('/nurse/delete/{id}',[NursesController::class,'nurseDelete'])->name('nurse.delete');




//MEDICINE
        Route::get('/medicines', [MedicinesController::class, 'medicines'])->name('medicines');
        Route::get('/medicines/create', [MedicinesController::class, 'medicinesCreate'])->name('medicines.create');
        Route::post('/medicines/list', [MedicinesController::class, 'medicinesList'])->name('medicines.list');
    Route::get('/medicine/delete/{id}',[MedicinesController::class,'medicineDelete'])->name('medicine.delete');




//PHARMACY
        Route::get('/pharmacy', [PharmaciesController::class, 'pharmacies'])->name('pharmacies');
        Route::get('/pharmacy/create', [PharmaciesController::class, 'pharmaciesCreate'])->name('pharmacies.create');
        Route::post('/pharmacy/list', [PharmaciesController::class, 'pharmaciesList'])->name('pharmacies.list');



//PRESCRIPTION
        Route::get('/prescriptions', [PrescriptionsController::class, 'prescriptions'])->name('prescriptions');
        Route::get('/prescription/create', [PrescriptionsController::class, 'prescriptionsCreate'])->name('prescriptions.create');
        Route::post('/prescriptions/list', [PrescriptionsController::class, 'prescriptionsList'])->name('prescriptions.list');



//PATIENT

        Route::get('/patients', [PatientsController::class, 'patients'])->name('patients');
        Route::get('/patients/create', [PatientsController::class, 'patientsCreate'])->name('patients.create');
        Route::post('/patients/list', [PatientsController::class, 'patientsList'])->name('patients.list');
        Route::get('/patient/delete/{id}',[PatientsController::class,'patientDelete'])->name('patient.delete');


    //RECEIPTIONIST

    Route::get('/receiptionists', [ReceiptionistsController::class, 'receiptionists'])->name('receiptionists');
    Route::get('/receiptionists/create', [ReceiptionistsController::class, 'receiptionistsCreate'])->name('receiptionists.create');
    Route::post('/receiptionists/list', [ReceiptionistsController::class, 'receiptionistsList'])->name('receiptionists.list');
    Route::get('/receiptionist/delete/{id}',[ReceiptionistsController::class,'receiptionistDelete'])->name('receiptionist.delete');


    });






