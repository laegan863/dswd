<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('Admin/index');
});

Route::get('/', [AdminController::class, 'dashboard']);
Route::get('/pwd', [AdminController::class, 'add_pwd_member']);
Route::get('/add pwd', [AdminController::class, 'add_pwd_member']);
Route::post('/submitted-pwd-application', [AdminController::class, 'pwd_application']);
Route::get('/brgy/{barangay_name}', [AdminController::class, 'select_brgy']);
Route::get('/barangay', [AdminController::class, 'brgy']);
Route::post('/list-of-members', [AdminController::class, 'member_list']);
Route::get('/solo-parent', [AdminController::class, 'solo_parent']);
