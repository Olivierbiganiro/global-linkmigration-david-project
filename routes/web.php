<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\User\DashboardController;
use App\Livewire\User\Admin\Dashboard\AdminDashboardLivewire;
use App\Livewire\User\User\Dashboard\UserDashboardLivewire;
use App\Livewire\User\Admin\Services\ServicesLivewire;
use App\Livewire\User\User\Service\UserServiceLivewire;
use App\Livewire\User\User\Service\ServiceApplicationLivewire;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::prefix('admin')
        ->name('admin.')
        ->group(function () {
            Route::get('/dashboard', AdminDashboardLivewire::class)->name('dashboard');
            Route::get('/services', ServicesLivewire::class)->name('services');
        });

    Route::prefix('user')
        ->name('user.')
        ->group(function () {
            Route::get('/dashboard', UserDashboardLivewire::class)->name('dashboard');
            Route::get('/services', UserServiceLivewire::class)->name('services');
            Route::get('/service/apply/{serviceId}', ServiceApplicationLivewire::class)->name('service.apply');
        });
});
