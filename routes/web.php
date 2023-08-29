<?php

use Illuminate\Support\Facades\Route;
  
use App\Http\Controllers\FrontController;

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
//Navbar routes
Route::get('home', [FrontController::class, 'home'])->name('home');
Route::get('addUser', [FrontController::class, 'addUser'])->name('addUser');
Route::get('viewUsers', [FrontController::class, 'viewUsers'])->name('viewUsers');

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Route to return addUser.blade.php view
Route::get("/addUser",[App\Http\Controllers\student::class, 'returnAddUserView']);

//Route to add user details to database using the addUserDetails method in student.php controller
Route::post("/addUserDetails",[App\Http\Controllers\student::class,'addUserDetails']);

//Route to return viewUsers.blade.php view
Route::get('/viewUsers',[App\Http\Controllers\student::class, 'returnViewUsers']);

//Route to send commands to deleteUser function in student controller
Route::get('/deleteUsers/{id}',[App\Http\Controllers\student::class, 'deleteUser']);

//Route to send commands to editUser function in student controller
// Route::get('/editUsers/{id}',[App\Http\Controllers\student::class, 'editUser']);
Route::get('/editUsers/{id}', [App\Http\Controllers\student::class, 'editUser'])->name('editUser');


//Route to send commands to editUser function in student controller
Route::post('/updateUser/{id}',[App\Http\Controllers\student::class, 'updateUser']);
