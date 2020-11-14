<?php

use Illuminate\Support\Facades\Route;

Route::get('/companies/all', '\App\Http\Controllers\CompaniesController@viewAllCompanies')->name('companies.all');
Route::post('/companies/add', '\App\Http\Controllers\CompaniesController@addNewCompany')->name('companies.add');
Route::post('/companies/delete', '\App\Http\Controllers\CompaniesController@deleteCompany')->name('companies.delete');
Route::get('/companies/edit/{id}', '\App\Http\Controllers\CompaniesController@editCompany')->name('companies.edit');
Route::post('/companies/update/{id}', '\App\Http\Controllers\CompaniesController@updateCompany')->name('companies.update');

Route::get('/employees/all', '\App\Http\Controllers\EmployeesController@viewAllEmployee')->name('employees.all');
Route::post('/employees/add', '\App\Http\Controllers\EmployeesController@addNewEmployee')->name('employees.add');
Route::post('/employees/delete', '\App\Http\Controllers\EmployeesController@deleteEmployee')->name('employees.delete');
Route::get('/employees/edit/{id}', '\App\Http\Controllers\EmployeesController@editEmployee')->name('employees.edit');
Route::post('/employees/update/{id}', '\App\Http\Controllers\EmployeesController@updateEmployee')->name('employees.update');