<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LinkController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\EducationController;
use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\PortoController;

Route::get('/', function () {
    return view('login.index');
});

// Login
Route::get('login', [LoginController::class, 'index']);

// Logout
Route::get('logout', [LoginController::class, 'logout'])->name('logout-action');

//Dashboard
Route::get('dashboard', [App\Http\Controllers\LoginController::class, 'dashboard'])->name('dashboard');

// Login eksekusi
Route::post('actionLogin', [App\Http\Controllers\LoginController::class, 'actionLogin'])->name('action-login');

// User (untuk profille)
Route::resource('users', UserController::class);

// Skills
Route::resource('skills', SkillController::class);

// Education
Route::resource('education', EducationController::class);

// Experience
Route::resource('experience', ExperienceController::class);

// Link
Route::resource('link', LinkController::class);


// untuk pengguna internet


// User interface
Route::get('portofolio', [PortoController::class, 'portofolio']);

// Porto profile
Route::get('profile', [PortoController::class, 'profile'])->name('profile');

// Porto skill
Route::get('skill', [PortoController::class, 'skill'])->name('skill');

// Porto education
Route::get('educations', [PortoController::class, 'educations'])->name('educations');

// Porto experiences
Route::get('experiences', [PortoController::class, 'experiences'])->name('experiences');

// Porto Link
Route::get('links', [PortoController::class, 'links'])->name('links');
