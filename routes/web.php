<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use Illuminate\Support\Facades\Route;

use Diglactic\Breadcrumbs\Breadcrumbs;
use  Diglactic\Breadcrumbs\Generator as BreadcrumbsTrail;

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
Route::get('/admin/login', [AdminController::class, 'login'])->name('admin-login');
Route::get('/teacher/login', [TeacherController::class, 'login'])->name('teacher-login');
Route::get('/login', [StudentController::class, 'login'])->name('student-login');


Route::get('/admin/dashboard', [AdminController::class,'dashboard'])->name('dashboard.admin');
Route::get('/admin/teachers', [AdminController::class,'teacher'])->name('admin.teacher');
Route::get('/admin/teacher/edit', [AdminController::class,'teacherEdit'])->name('admin.teacherEdit');
Route::get('/admin/teacher/view', [AdminController::class,'teacherView'])->name('admin.teacherView');
Route::get('/admin/teacher/create-new', [AdminController::class,'addTeacher'])->name('admin.addTeacher');
Route::post('/admin/teacher/create-new', [AdminController::class,'createTeacher'])->name('admin.createTeacher');



//breadcrumb
Breadcrumbs::for('admin.teacher', function (BreadcrumbsTrail $trail) {
    $trail->push('Teachers', route('admin.teacher'));
});

Breadcrumbs::for('admin.teacherEdit', function (BreadcrumbsTrail $trail) {
    $trail->parent('admin.teacher'); // Assuming 'dashboard.admin' is the parent breadcrumb
    $trail->push('Edit Teacher', route('admin.teacherEdit'));
});


Breadcrumbs::for('admin.addTeacher', function (BreadcrumbsTrail $trail) {
    $trail->parent('admin.teacher'); // Assuming 'dashboard.admin' is the parent breadcrumb
    $trail->push('Add New', route('admin.addTeacher'));
});