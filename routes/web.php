<?php

use App\Http\Controllers\ApplicationController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DirectorController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\ExecutiveController;


/* User */
Route::get('/',[UserController::class, 'home'])->name("home");
Route::get('/signin',[UserController::class, 'signin'])->name("signin");
Route::post('/signinSubmitted',[UserController::class, 'signinSubmitted'])->name("signinSubmitted");
Route::get('/logout',[UserController::class,'logout'])->name('logout');

Route::get('/singup',[UserController::class, 'singup'])->name("singup");

/* Admin */
Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('adminDash');
Route::get('/admin/profile', [AdminController::class, 'profile'])->name('adminProfile');
Route::get('/admin/edit', [AdminController::class, 'editProfile'])->name('adminEditProfile');
Route::post('/admin/editSubmitted', [AdminController::class, 'editProfileSubmitted'])->name('adminEditProfileSubmitted');

/* Director */
Route::get('/director', [DirectorController::class, 'dashboard'])->name('directorDash');
Route::get('/director/profile', [DirectorController::class, 'profile'])->name('directorProfile');
Route::get('/director/edit', [DirectorController::class, 'EditProfile'])->name('directorEditProfile');
Route::post('/director/edit', [DirectorController::class, 'editProfileSubmitted'])->name('directorEditProfileSubmitted');

/* Member */
Route::get('/member', [MemberController::class, 'dashboard'])->name('memberDash');
Route::get('/member/profile', [MemberController::class, 'profile'])->name('memberProfile');
Route::get('/member/edit', [MemberController::class, 'EditProfile'])->name('memberEditProfile');
Route::post('/member/edit', [MemberController::class, 'editProfileSubmitted'])->name('memberEditProfileSubmitted');


/* Executive */
Route::get('/executive/dashboard', [ExecutiveController::class, 'dashboard'])->name('executiveDash');
Route::get('/executive/profile', [ExecutiveController::class, 'profile'])->name('executiveProfile');
Route::get('/executive/edit', [ExecutiveController::class, 'EditProfile'])->name('executiveEditProfile');
Route::post('/executive/edit', [ExecutiveController::class, 'EditProfile'])->name('executiveEditProfile');


//Executive Application
Route::get('/executive/application/compose', [ApplicationController::class, 'applicationCompose'])->name('executiveApplicationCompose');
Route::get('/executive/application/approved', [ApplicationController::class, 'applicationApproved'])->name('executiveApplicationApproved');
Route::get('/executive/application/pending', [ApplicationController::class, 'applicationPending'])->name('executiveApplicationPending');
Route::get('/executive/application/rejected', [ApplicationController::class, 'applicationRejected'])->name('executiveApplicationRejected');
Route::get('/executive/application/read', [ApplicationController::class, 'applicationRead'])->name('executiveApplicationRead');
Route::get('/executive/application/', [ApplicationController::class, 'allApplication'])->name('executiveAllApplication');
