<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\CommandsController;

// TEMPORARY: Remove after running migrations
// Route::get('/run-migrations', function () {
//     try {
//         \Illuminate\Support\Facades\Artisan::call('migrate', ['--force' => true]);
//         return 'Migrations completed successfully!';
//     } catch (\Exception $e) {
//         return 'Error: ' . $e->getMessage();
//     }
// });

// Public Routes
Route::get('/', function () {
    return view('pages.home');
})->name('home');

Route::get('/about', function () {
    return view('pages.about');
})->name('about');

Route::get('/team', function () {
    return view('pages.team');
})->name('team');

Route::get('/careers', function () {
    return view('pages.careers');
})->name('careers');

Route::get('/partners', function () {
    return view('pages.partners');
})->name('partners');

// Services Routes
Route::get('/services/medical-cover', function () {
    return view('pages.services.medical-cover');
})->name('service.medical-cover');

Route::get('/services/training', function () {
    return view('pages.services.training');
})->name('service.training');

Route::get('/services/staffing', function () {
    return view('pages.services.staffing');
})->name('service.staffing');

Route::get('/services/corporate', function () {
    return view('pages.services.corporate-packages');
})->name('service.corporate');

// Events Routes
Route::get('/events/sports', function () {
    return view('pages.events.sports');
})->name('event.sports');

Route::get('/events/concerts', function () {
    return view('pages.events.concerts');
})->name('event.concerts');

Route::get('/events/corporate', function () {
    return view('pages.events.corporate');
})->name('event.corporate');

Route::get('/events/community', function () {
    return view('pages.events.community');
})->name('event.community');

// Public API Routes
Route::post('/api/contact/submit', [ContactController::class, 'submit'])
    ->middleware('throttle:10,60')
    ->name('api.contact.submit');

Route::get('/api/gallery', [GalleryController::class, 'index'])
    ->name('api.gallery.index');

// Admin Auth Routes
Route::get('/admin/login', function () {
    return view('admin.login');
})->middleware('guest')->name('admin.login');

Route::post('/api/auth/login', [AuthController::class, 'login'])
    ->middleware('throttle:15,15')
    ->name('api.auth.login');

Route::get('/api/auth/verify', [AuthController::class, 'verify'])
    ->name('api.auth.verify');

Route::post('/api/auth/logout', [AuthController::class, 'logout'])
    ->middleware('admin')
    ->name('api.auth.logout');

// Admin Root Redirect
Route::get('/admin', function () {
    return redirect()->route('admin.dashboard');
});

// Protected Admin Routes (Single Middleware Group)
Route::middleware('admin')->group(function () {
    // Admin Dashboard
    Route::get('/admin/dashboard', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');

    // Commands Dashboard
    Route::get('/admin/commands', [CommandsController::class, 'dashboard'])
        ->name('admin.commands');

    // Page & Content Manager (Legacy "Professional Portal" replacement)
    Route::get('/admin/pages', \App\Livewire\Admin\PageManager::class)
        ->name('admin.pages');

    // Contact Manager
    Route::get('/admin/contacts', \App\Livewire\Admin\ContactManager::class)
        ->name('admin.contacts');

    // Link Manager
    Route::get('/admin/links', \App\Livewire\Admin\LinkManager::class)
        ->name('admin.links');

    // System Operations (Require SuperAdmin)
    Route::middleware('superadmin')->group(function () {
        Route::post('/api/admin/commands/execute', [CommandsController::class, 'execute'])
            ->name('api.admin.commands.execute');
            
        Route::patch('/api/contact/{id}/read', [ContactController::class, 'markRead'])
            ->name('api.contact.mark-read');
        
        Route::delete('/api/contact/{id}', [ContactController::class, 'destroy'])
            ->name('api.contact.destroy');
    });

    Route::get('/api/admin/commands/info', [CommandsController::class, 'info'])
        ->name('api.admin.commands.info');

    // Contact API Routes
    Route::get('/api/contact/submissions', [ContactController::class, 'submissions'])
        ->name('api.contact.submissions');

    // Gallery API Routes (Destructive ACTIONS require SuperAdmin)
    Route::middleware('superadmin')->group(function () {
        Route::post('/api/gallery/upload', [GalleryController::class, 'upload'])
            ->name('api.gallery.upload');
        
        Route::patch('/api/gallery/{id}', [GalleryController::class, 'update'])
            ->name('api.gallery.update');
        
        Route::post('/api/gallery/reorder', [GalleryController::class, 'reorder'])
            ->name('api.gallery.reorder');
        
        Route::delete('/api/gallery/{id}', [GalleryController::class, 'destroy'])
            ->name('api.gallery.destroy');
    });
});

