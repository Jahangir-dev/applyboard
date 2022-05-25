<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\EducationController;
use App\Http\Controllers\CoursesController;
use App\Http\Controllers\PartnerController;
use App\Http\Controllers\AmbassadorsController;





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
    return view('index');
});

Route::get('/reg', function () {
    return view('register');
});





/*
|--------------------------------------------------------------------------
| Student protion
|--------------------------------------------------------------------------
*/

Route::prefix('Student')->group(function () {

    Route::get('login', [UserController::class, 'login'])->name('Student.login');
    Route::get('register', [UserController::class, 'register'])->name('Student.register');
    Route::post('register', [StudentController::class, 'student_register'])->name('Student.create');
    Route::post('student-login', [StudentController::class, 'Userlogin'])->name('Student.student_login');
    Route::get('student-logout', [StudentController::class, 'logout'])->name('Student.student_logout');
    Route::get('student-home', [StudentController::class, 'student_home'])->name('Student.student_home');
    Route::get('student-search', [StudentController::class, 'student_program'])->name('Student.student_search');
    Route::get('student-profile', [StudentController::class, 'student_profile'])->name('Student.student_profile');
    Route::get('student-application', [StudentController::class, 'student_application'])->name('Student.student_application');
    Route::get('student-payment', [StudentController::class, 'student_payment'])->name('Student.student_payment');






    

   
});






/*
|--------------------------------------------------------------------------
| partner protion
|--------------------------------------------------------------------------
*/

Route::prefix('partner')->group(function () {

   // Route::get('login', [UserController::class, 'login'])->name('Student.login');
  //  Route::get('register', [UserController::class, 'register'])->name('Student.register');
   // Route::post('register', [StudentController::class, 'student_register'])->name('Student.create');
//    Route::post('student-login', [StudentController::class, 'Userlogin'])->name('Student.student_login');
 //   Route::get('student-logout', [StudentController::class, 'logout'])->name('Student.student_logout');
    Route::get('dashboard', [PartnerController::class, 'partner_home'])->name('partner.partner_home');
    Route::get('search', [PartnerController::class, 'partner_program'])->name('partner.partner_search');
    Route::get('students', [PartnerController::class, 'partner_student'])->name('partner.students');
    Route::get('application', [PartnerController::class, 'partner_application'])->name('partner.application');
    Route::get('payments', [PartnerController::class, 'partner_payment'])->name('partner.payment');
    Route::get('growth-hub', [PartnerController::class, 'partner_growth'])->name('partner.growth');

   
});






/*
|--------------------------------------------------------------------------
| Ambassadors protion
|--------------------------------------------------------------------------
*/

Route::prefix('ambassador')->group(function () {

    // Route::get('login', [UserController::class, 'login'])->name('Student.login');
   //  Route::get('register', [UserController::class, 'register'])->name('Student.register');
    // Route::post('register', [StudentController::class, 'student_register'])->name('Student.create');
 //    Route::post('student-login', [StudentController::class, 'Userlogin'])->name('Student.student_login');
  //   Route::get('student-logout', [StudentController::class, 'logout'])->name('Student.student_logout');
     Route::get('dashboard', [AmbassadorsController::class, 'ambassdor_home'])->name('ambassador.partner_home');
  //   Route::get('search', [PartnerController::class, 'partner_program'])->name('partner.partner_search');
     Route::get('students', [AmbassadorsController::class, 'ambassdor_student'])->name('ambassador.students');
 //    Route::get('application', [PartnerController::class, 'partner_application'])->name('partner.application');
     Route::get('payments', [AmbassadorsController::class, 'ambassdor_payment'])->name('ambassdaor.payment');
//     Route::get('growth-hub', [PartnerController::class, 'partner_growth'])->name('partner.growth');
 
    
 });










/*
|--------------------------------------------------------------------------
| admin protion
|--------------------------------------------------------------------------
*/



Route::prefix('admin')->group(function () {
    Route::get('login', [AdminController::class, 'login'])->name('admin.login');
    Route::post('admin-login', [AdminController::class, 'adminlogin'])->name('admin.admin_login');
    Route::get('admin-logout', [AdminController::class, 'logout'])->name('admin.admin_logout');
    Route::get('admin-add_Country', [AdminController::class, 'add_Country'])->name('admin.add_Country');
    Route::post('admin-addCountry', [AdminController::class, 'Country'])->name('admin.Country');
    Route::get('admin-allCountry', [AdminController::class, 'all_Country'])->name('admin.Country.all');
    Route::get('admin-add_province/{id}', [AdminController::class, 'province'])->name('admin.add_province');
    Route::post('add-province', [AdminController::class, 'add_province'])->name('admin.province.add');
    Route::get('show-province/{id}', [AdminController::class, 'show_province'])->name('admin.province.show');
    

    // ajex route start

    Route::get('get_province/{id}', [AdminController::class, 'get_province']);

    //ajex route end

    Route::get('add_Education', [EducationController::class, 'add_Education'])->name('admin.add_Education');
    Route::post('Create_Education', [EducationController::class, 'Create_Education'])->name('admin.Create_Education');
    Route::get('all_Education', [EducationController::class, 'all_Education'])->name('admin.all_Education');
    Route::get('add_edu_Level/{id}', [EducationController::class, 'add_edu_Level'])->name('admin.add_level');
    Route::post('add_edu_Level', [EducationController::class, 'add_Level'])->name('admin.level.add');
    Route::get('show-edu_Level/{id}', [EducationController::class, 'show_edu_Level'])->name('admin.level.show');





    Route::get('add_course', [CoursesController::class, 'add_course'])->name('admin.add_course');
    Route::post('create_course', [CoursesController::class, 'create_course'])->name('admin.create_course');
    Route::post('search_course', [CoursesController::class, 'search_course'])->name('admin.search_course');








});
