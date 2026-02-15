<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RsvpController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\InvitationController;

// Landing Page
Route::get('/', [HomeController::class, 'index'])->name('home');

// Auth Routes
Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Dashboard & CRUD (Protected)
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [InvitationController::class, 'index'])->name('dashboard');
    Route::get('/invitations/create', [InvitationController::class, 'create'])->name('invitations.create');
    Route::post('/invitations', [InvitationController::class, 'store'])->name('invitations.store');
    Route::get('/invitations/{invitation}/edit', [InvitationController::class, 'edit'])->name('invitations.edit');
    Route::put('/invitations/{invitation}', [InvitationController::class, 'update'])->name('invitations.update');
});

// Public Invitation View
Route::get('/v/{slug}', [InvitationController::class, 'show'])->name('invitation.show');
Route::post('/rsvp/{invitation}', [RsvpController::class, 'store'])->name('rsvp.store');
