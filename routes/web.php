<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\redirection;
use App\Http\Controllers\UsersController;
use App\Http\Middleware\TokenValidation;
use App\Http\Controllers\smsController;
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

if (session()->has('user_id')) {
	if (session()->get('user_id')==1) {
		return view('Admin/index');
	}else{
		return view('users.index');
	}
}else{
	return view('login');
}
	
    
});
Route::get('/admin', [AdminController::class, 'dashboard']); 
Route::get('admin/add pwd', [AdminController::class, 'add_pwd_member']);
Route::get('/brgy/{barangay_name}', [AdminController::class, 'select_brgy']);
Route::get('/barangay', [AdminController::class, 'brgy']);
Route::get('/list-of-members', [AdminController::class, 'member_list']);
Route::get('admin/solo-parent', [AdminController::class, 'solo_parent']);
Route::get('/login', function(){
	if(session()->has('user_id')){
       	if (session()->get('user_id')!=1) {
       		return view("users.index");
       	}else{
       		return view("Admin.index");
       	}
    }else{
        return view('login');
    } 
});
Route::get('admim/announcement',function(){
	return view('Admin.announcement');
});
Route::get('/logout', [AdminController::class, 'logout']);
Route::get('brgys', [AdminController::class, 'brgys']);

// users
Route::get('/register', [redirection::class, 'register']);
Route::post('/login_auth', [redirection::class, 'login_auth']);
Route::get('/user', [UsersController::class, 'user_index']);
Route::post('/submitted-pwd-application', [UsersController::class, 'pwd_application']);
Route::get('/pwd', [usersController::class, 'add_pwd_member']);
Route::get('/women', [usersController::class, 'add_women_member']);
Route::get('/barangay/{barangay_name}/{designation}', [usersController::class, 'select_brgy']);
Route::get('/selected_brgy/', [usersController::class, 'selected_brgy']);
Route::get('/pwd_members', function(){
	return view('users.pwd_member');
});
Route::get('/solo-parent', [UsersController::class, 'solo_parent']);
Route::post('/add-solo-parent', [usersController::class, 'add_solo_parent']);

Route::get('/senior', [usersController::class, 'senior']);
Route::post('/add-senior-member', [usersController::class, 'add_senior']);

// smsController
Route::post('send-annoucement',[smsController::class, 'send_sms'])->name('announcement');
