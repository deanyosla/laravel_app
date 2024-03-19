<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\EmployeeTestimonialsController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\CompanyController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('employees/{employee:slug}', [EmployeeController::class, 'show']);
Route::post('employees/{employee:slug}/testimonials', [EmployeeTestimonialsController::class, 'store']);


Route::post('newsletter', NewsletterController::class);


Route::get('register', [RegisterController::class, 'create'])->middleware('guest');
Route::post('register', [RegisterController::class, 'store'])->middleware('guest');
Route::get('login', [SessionsController::class, 'create'])->middleware('guest');
Route::post('sessions', [SessionsController::class, 'store'])->middleware('guest');


Route::post('logout', [SessionsController::class, 'destroy'])->middleware('auth');


Route::get('employees', [EmployeeController::class, 'index']);
Route::get('admin/employees', [EmployeeController::class, 'index'])->middleware('admin');
Route::get('admin/employees/create', [EmployeeController::class, 'create'])->middleware('admin');
Route::post('admin/employees', [EmployeeController::class, 'store'])->middleware('admin');
Route::get('admin/employees/{employee:slug}/edit', [EmployeeController::class, 'edit'])->middleware('admin');
Route::put('admin/employees/{employee:slug}', [EmployeeController::class, 'update'])->middleware('admin');
Route::patch('admin/employees/{employee:slug}/image', [EmployeeController::class, 'updateImage'])->middleware('admin');
Route::delete('admin/employees/{employee:slug}', [EmployeeController::class, 'destroy'])->middleware('admin');


Route::get('companies', [CompanyController::class, 'index']);
Route::get('companies/{company:slug}', [CompanyController::class, 'show']);
Route::get('admin/companies', [CompanyController::class, 'index'])->middleware('admin');
Route::get('admin/companies/create', [CompanyController::class, 'create'])->middleware('admin');
Route::post('admin/companies', [CompanyController::class, 'store'])->middleware('admin');
Route::get('admin/companies/{company:slug}/edit', [CompanyController::class, 'edit'])->middleware('admin');
Route::put('admin/companies/{company:slug}', [CompanyController::class, 'update'])->middleware('admin');
Route::patch('admin/companies/{company:slug}/image', [CompanyController::class, 'updateImage'])->middleware('admin');
Route::delete('admin/companies/{company:slug}', [CompanyController::class, 'destroy'])->middleware('admin');





