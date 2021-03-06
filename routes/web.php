<?php

use App\Http\Controllers\Backend\PaymentController;
use App\Http\Controllers\Backend\ReportController;
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
use App\Http\Controllers\Backend\ReceptionistsController;
use App\Http\Controllers\Backend\AdminsController;
use App\Http\Controllers\Backend\AppointmentController;
use App\Http\Controllers\Backend\DepartmentsController;
use App\Http\Controllers\Frontend\UserController;






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



//USER LOGIN
Route::get('/user/login',[PatientsController::class,'userLogin'])->name('user.login');
Route::post('/loginValidation',[PatientsController::class,'userLoginValidation'])->name('login.validation');
Route::get('/user/logout',[PatientsController::class,'userLogout'])->name('user.logout');
Route::get('/password/reset',[PatientsController::class,'passwordRecoverEmail'])->name('password.recover.email.form');
Route::post('/password/reset/post',[PatientsController::class,'passwordRecoverEmailPost'])->name('password.recover.email.post');
Route::get('/password/form/{token}',[PatientsController::class,'passwordForm'])->name('password.form');
Route::put('/password/update',[PatientsController::class,'passwordUpdate'])->name('password.update');


//USER PROFILE
Route::get('/user/Profile',[UserController::class,'userProfile'])->name('user.profile');
Route::get('/userProfile/view',[UserController::class,'userProfileView'])->name('user.profileView');



//PAYMENT METHOD
Route::get('/payment/form/{id}', [PaymentController::class, 'paymentForm'])->name('payment.form');
Route::post('/payment/view', [PaymentController::class, 'paymentView'])->name('payment.view');
Route::get('/payment/list', [PaymentController::class, 'paymentList'])->name('payment.list');



//USER REGISTRATION
Route::get('/user/registration',[PatientsController::class,'userRegistration'])->name('user.registration');
Route::post('/user/registrationCreate',[PatientsController::class,'registrationCreate'])->name('registration.create');







//ADMIN PANNEL ROUTE
Route::group(['prefix'=>'admin'],function (){

    //ADMIN LOGIN

    Route::get('/adminLogin/form',[AdminsController::class,'adminlogin'])->name('adminLogin.view');
    Route::post('/admin/login',[AdminsController::class,'loginValidation'])->name('admin.login');
    Route::get('/admin/logout',[AdminsController::class,'adminLogout'])->name('admin.logout');



    Route::group(['middleware'=>'auth'],function (){





//DASHBOARD (control panel BACKEND)

        Route::get('/', [DashboardController::class, 'adminHome'])->name('home');
        Route::get('/home', [DashboardController::class, 'homeDashboard'])->name('home.dashboard');



        //LOG OUT

        Route::get('/adminLogout/form',[AdminsController::class,'adminLogout'])->name('adminLogout.view');







//DEPARTMENT

        Route::get('/departments', [DepartmentsController::class, 'departments'])->name('departments');
        Route::get('/departments/create', [DepartmentsController::class, 'departmentsCreate'])->name('departments.create');
        Route::post('/departments/list', [DepartmentsController::class, 'departmentsList'])->name('departments.list');
        Route::get('/department/delete/{id}',[DepartmentsController::class,'departmentDelete'])->name('department.delete');
        Route::get('/department/edit/{id}',[DepartmentsController::class,'departmentEdit'])->name('department.edit');
        Route::put('/department/update/{id}',[DepartmentsController::class,'departmentUpdate'])->name('department.update');





//DOCTORS

        Route::get('/doctors', [DoctorsController::class, 'doctors'])->name('doctors');
        Route::get('/doctors/create', [DoctorsController::class, 'doctorsCreate'])->name('doctors.create');
        Route::post('/doctors/list', [DoctorsController::class, 'doctorsList'])->name('doctors.list');
        Route::get('/doctor/delete/{id}',[DoctorsController::class,'doctorDelete'])->name('doctor.delete');
        Route::get('/doctor/edit/{id}',[DoctorsController::class,'doctorEdit'])->name('doctor.edit');
        Route::put('/doctor/update/{id}',[DoctorsController::class,'doctorUpdate'])->name('doctor.update');

//        Route::post('/doctor/search',[DoctorsController::class,'search'])->name('doctor.search');


//NURSE
        Route::get('/nurses', [NursesController::class, 'nurses'])->name('nurses');
        Route::get('/nurses/create', [NursesController::class, 'nursesCreate'])->name('nurses.create');
        Route::post('/nurses/list', [NursesController::class, 'nursesList'])->name('nurses.list');
        Route::get('/nurse/delete/{id}',[NursesController::class,'nurseDelete'])->name('nurse.delete');
        Route::get('/nurse/edit/{id}',[NursesController::class,'nurseEdit'])->name('nurse.edit');
        Route::put('/nurse/update/{id}',[NursesController::class,'nurseUpdate'])->name('nurse.update');




//MEDICINE
        Route::get('/medicines', [MedicinesController::class, 'medicines'])->name('medicines.view');
        Route::get('/medicines/create', [MedicinesController::class, 'medicinesCreate'])->name('medicines.create');
        Route::post('/medicines/list', [MedicinesController::class, 'medicinesList'])->name('medicines.list');
        Route::get('/medicine/delete/{id}',[MedicinesController::class,'medicineDelete'])->name('medicine.delete');
        Route::get('/medicine/edit/{id}',[MedicinesController::class,'medicineEdit'])->name('medicine.edit');
        Route::put('/medicine/update/{id}',[MedicinesController::class,'medicineUpdate'])->name('medicine.update');



//PHARMACY
        Route::get('/pharmacy', [PharmaciesController::class, 'pharmacies'])->name('pharmacies');
        Route::get('/pharmacy/create', [PharmaciesController::class, 'pharmaciesCreate'])->name('pharmacies.create');
        Route::post('/pharmacy/list', [PharmaciesController::class, 'pharmaciesList'])->name('pharmacies.list');
        Route::get('/pharmacy/delete/{id}',[PharmaciesController::class,'pharmacyDelete'])->name('pharmacy.delete');
        Route::get('/pharmacy/edit/{id}',[PharmaciesController::class,'pharmacyEdit'])->name('pharmacy.edit');
        Route::put('/pharmacy/update/{id}',[PharmaciesController::class,'pharmacyUpdate'])->name('pharmacy.update');


//PRESCRIPTION
        Route::get('/prescriptions', [PrescriptionsController::class, 'prescriptions'])->name('prescriptions');
        Route::get('/prescription/create/{id?}', [PrescriptionsController::class, 'prescriptionsCreate'])->name('prescriptions.create');
        Route::post('/prescriptions/list', [PrescriptionsController::class, 'prescriptionsList'])->name('prescriptions.list');
        Route::get('/prescription/delete/{id}',[PrescriptionsController::class,'prescriptionDelete'])->name('prescription.delete');
//




//PATIENT

        Route::get('/patients', [PatientsController::class, 'patients'])->name('patients');
        Route::get('/patients/create', [PatientsController::class, 'patientsCreate'])->name('patients.create');
        Route::post('/patients/list', [PatientsController::class, 'patientsList'])->name('patients.list');
        Route::get('/patient/delete/{id}',[PatientsController::class,'patientDelete'])->name('patient.delete');
        Route::get('/patient/edit/{id}',[PatientsController::class,'patientEdit'])->name('patient.edit');
        Route::put('/patient/update/{id}',[PatientsController::class,'patientUpdate'])->name('patient.update');

    //RECEPTIONIST

    Route::get('/receptionists', [ReceptionistsController::class, 'receptionists'])->name('receptionists');
    Route::get('/receptionists/create', [ReceptionistsController::class, 'receptionistsCreate'])->name('receptionists.create');
    Route::post('/receptionists/list', [ReceptionistsController::class, 'receptionistsList'])->name('receptionists.list');
    Route::get('/receptionist/delete/{id}',[ReceptionistsController::class,'receptionistDelete'])->name('receptionist.delete');


//ADMIN
    Route::get('/admins',[AdminsController::class,'admins'])->name('admins');
    Route::get('/admins/create', [AdminsController::class, 'adminsCreate'])->name('admins.create');
    Route::post('/admins/list', [AdminsController::class, 'adminsList'])->name('admins.list');
    Route::get('/admin/delete/{id}',[AdminsController::class,'adminDelete'])->name('admin.delete');
    Route::get('/admin/edit/{id}',[AdminsController::class,'adminEdit'])->name('admin.edit');
    Route::put('/admin/update/{id}',[AdminsController::class,'adminUpdate'])->name('admin.update');








    //APPOINTMENT LIST
        //BACKEND
    Route::get('/appointments', [AppointmentController::class, 'appointments'])->name('appointments');
    Route::get('/appointments/create', [AppointmentController::class, 'appointmentsCreate'])->name('appointments.create');
    Route::post('/appointments/list', [AppointmentController::class, 'appointmentsList'])->name('appointments.list');
    Route::get('/appointment/delete/{id}',[AppointmentController::class,'appointmentDelete'])->name('appointment.delete');
    Route::get('/appointment/edit/{id}',[AppointmentController::class,'appointmentEdit'])->name('appointment.edit');
    Route::put('/appointment/update/{id}',[AppointmentController::class,'appointmentUpdate'])->name('appointment.update');


    //FRONTEND
        Route::post('/appointment/create/frontend',[AppointmentController::class,'appointmentFormCreate'])->name('apointment.form.create');



//REPORT GENERARTE
        Route::get('/report', [ReportController::class, 'reportPrescription'])->name('report.prescription');

//PAYMENT METHOD

    });
});











