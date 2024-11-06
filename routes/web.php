<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::get('import-excel',[UserController::class,'importExcel'])->name('import.excel');

Route::post('import-excel',[UserController::class,'importExcelPost'])->name('import.excel.post');

Route::get('export-excel',[UserController::class,'exportExcel'])->name('export.excel');

Route::get('/', function () {
    return view('welcome');
});

