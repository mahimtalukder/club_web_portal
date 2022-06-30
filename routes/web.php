<?php

use App\Http\Controllers\ApplicationController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DirectorController;
use App\Http\Controllers\ClubController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\ExecutiveController;


/* User */
Route::get('/',[UserController::class, 'home'])->name("home");
Route::get('/signin',[UserController::class, 'signin'])->name("signin");
Route::post('/signinSubmitted',[UserController::class, 'signinSubmitted'])->name("signinSubmitted");
Route::get('/logout',[UserController::class,'logout'])->name('logout');

Route::get('/singup',[UserController::class, 'singup'])->name("singup");
Route::get('/forgetPassword',[UserController::class, 'forgetPassword'])->name("forgetPassword");

/* Admin */
Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('adminDash');
Route::get('/admin/profile', [AdminController::class, 'profile'])->name('adminProfile');
Route::get('/admin/edit', [AdminController::class, 'editProfile'])->name('adminEditProfile');
Route::post('/admin/editSubmitted', [AdminController::class, 'editProfileSubmitted'])->name('adminEditProfileSubmitted');
Route::get('/admin/create/director', [AdminController::class, 'adminCreateDirector'])->name('adminCreateDirector');
Route::post('/admin/create/director', [AdminController::class, 'adminCreateDirectorSubmitted'])->name('adminCreateDirectorSubmitted');
Route::get('/admin/list/director', [AdminController::class, 'directorList'])->name('adminDirectorList');
Route::get('/admin/update/director/{id}', [AdminController::class, 'directorUpdate'])->name('adminDirectorUpdate');
Route::post('/admin/update/director/{id}', [AdminController::class, 'directorUpdateSubmitted'])->name('adminDirectorUpdateSubmitted');
Route::post('/admin/edit/upload', [AdminController::class, 'adminImageUpload'])->name('adminImageUploadsubmitted');



/* Director */
Route::get('/director/dashboard', [DirectorController::class, 'dashboard'])->name('directorDash');
Route::get('/director/profile', [DirectorController::class, 'profile'])->name('directorProfile');
Route::get('/director/edit', [DirectorController::class, 'EditProfile'])->name('directorEditProfile');
Route::post('/director/edit', [DirectorController::class, 'editProfileSubmitted'])->name('directorEditProfileSubmitted');
Route::post('/director/edit/upload', [DirectorController::class, 'directorImageUpload'])->name('directorImageUploadsubmitted');


/* Member */
Route::get('/member', [MemberController::class, 'dashboard'])->name('memberDash');
Route::get('/member/profile', [MemberController::class, 'profile'])->name('memberProfile');
Route::get('/member/edit', [MemberController::class, 'EditProfile'])->name('memberEditProfile');
Route::post('/member/edit', [MemberController::class, 'editProfileSubmitted'])->name('memberEditProfileSubmitted');
Route::post('/member/edit/upload', [MemberController::class, 'memberImageUpload'])->name('memberImageUploadsubmitted');


/* Executive */
Route::get('/executive/dashboard', [ExecutiveController::class, 'dashboard'])->name('executiveDash');
Route::get('/executive/profile', [ExecutiveController::class, 'profile'])->name('executiveProfile');
Route::get('/executive/edit', [ExecutiveController::class, 'EditProfile'])->name('executiveEditProfile');

Route::post('/executive/edit', [ExecutiveController::class, 'editProfileSubmitted'])->name('executiveEditProfileSubmitted');

Route::post('/executive/edit/upload', [ExecutiveController::class, 'executiveImageUpload'])->name('executiveImageUpload');

Route::get('/executive/AllMembers', [ExecutiveController::class, 'ViewAllMamber'])->name('executiveViewAllMamber');
Route::get('/executive/NewMembers', [ExecutiveController::class, 'CreateNewMamber'])->name('executiveCreateNewMamber');
Route::post('/executive/NewMembers', [ExecutiveController::class, 'CreateMamber'])->name('executiveCreateMambersubmitted');





//Executive Application
Route::get('/executive/application/compose', [ApplicationController::class, 'applicationCompose'])
->name('executiveApplicationCompose')->middleware('validExecutive');
Route::post('/executive/application/composeSubmitted', [ApplicationController::class, 'applicationComposeSubmitted'])
->name('executiveApplicationComposeSubmitted')->middleware('validExecutive');

Route::get('/executive/application/approved', [ApplicationController::class, 'applicationApproved'])
->name('executiveApplicationApproved')->middleware('validExecutive');
Route::get('/executive/application/pending', [ApplicationController::class, 'applicationPending'])
->name('executiveApplicationPending')->middleware('validExecutive');
Route::get('/executive/application/rejected', [ApplicationController::class, 'applicationRejected'])
->name('executiveApplicationRejected')->middleware('validExecutive');
Route::get('/executive/application/read/{id}', [ApplicationController::class, 'applicationRead'])
->name('executiveApplicationRead')->middleware('validExecutive');
Route::get('/executive/application/', [ApplicationController::class, 'allApplication'])
->name('executiveAllApplication')->middleware('validExecutive');

Route::get('/executive/application/search', [ApplicationController::class, 'searchExecutiveApplication'])
    ->name('searchExecutiveApplication')->middleware('validExecutive');

/* Director Application */
Route::get('/director/application', [DirectorController::class, 'allApplication'])
->name('directorAllApplication');
Route::get('/director/application/read/{id}', [DirectorController::class, 'applicationRead'])
->name('directorApplicationRead');

Route::get('/director/application/removeComponent/{id}/{application_id}/{remarks}', [ApplicationController::class, 'removeComponent'])
->name('directorRemoveComponent')->middleware('validDirector');

Route::get('/director/application/rejectApplication/{application_id}/{remarks}', [ApplicationController::class, 'rejectApplication'])
->name('directorRejectApplication')->middleware('validDirector');

Route::post('/director/application/updateSubmitted', [ApplicationController::class, 'applicationUpdateSubmitted'])
->name('directorApplicationUpdateSubmitted')->middleware('validDirector');

Route::get('/director/application/club/{id}', [DirectorController::class, 'clubWiseApplication'])
    ->name('clubWiseApplication')->middleware('validDirector');



/* Director Club */
Route::get('/director/club/allClub', [DirectorController::class, 'allClub'])->name('directorAllClub');
Route::get('/director/club/info/{id}', [DirectorController::class, 'clubInfo'])->name('directorClubInfo');

Route::get('/director/club/create', [DirectorController::class, 'createClub'])->name('directorCreateClub');
Route::post('/director/club/createSubmitted', [DirectorController::class, 'createClubSubmitted'])->name('directorCreateClubSubmitted');


Route::get('/print', [ClubController::class, 'print'])->name('print');
