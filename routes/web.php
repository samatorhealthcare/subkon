<?php

use App\Livewire\Assignment;
use Filament\Pages\Dashboard;
use App\Filament\Resources\ProjectResource\Pages\ListProjects;
use App\Http\Controllers\CameraController;
use Illuminate\Support\Facades\Route;
use Illuminate\Routing\Controllers\Middleware;
use Illuminate\Routing\RouteGroup;
use App\Http\Controllers\WebcamController;


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
Route::group(['middleware' => 'auth'], function () {
    Route::get('assignment', Assignment::class)->name('assignment');
});

Route::get('/login', function () {
    return redirect('sandana/login');
})->name('login');

Route::get('/projects', function () {
    return redirect('sandana/projects');
})->name('projects');

Route::get('/projects/{id}/assign-employees', Assignment::class)->name('projects.assignEmployees');

//buat route nembak function
Route::get('assign-employees', [Assignment::class, 'newbie'])->name('ivan');
//sama
Route::post('project', [Assignment::class, 'assignEmployees'])->name('pegawai');

//mengambil boss
// Route::get('sandana/projects', [ListProjects::class, 'sendBack'])->name('sandana.projects');

Route::get('/', function () {
    return view('welcome');
});

// Route::get('webcam', [WebcamController::class, 'index']);

// Route::post('webcam', [WebcamController::class, 'store'])->name('webcam.capture');


Route::get('/presensi', [CameraController::class, 'index'])->name('presensi');
Route::get('presensi', [CameraController::class, 'index']);
// Route::post('presensi', [CameraController::class, 'store'])->name('presensi.capture');
// Route::middleware(['auth'])->group(function () {
//     Route::post('/presensi/capture', [CameraController::class, 'capture'])->name('presensi.capture');
// });

//access presensi
Route::middleware(['auth'])->get('/presensi', function () {
    return view('presensi');
})->name('presensi.capture');

Route::middleware(['auth'])->get('/presensi', function () {
    return view('sandana/projects');
})->name('presensi.assign');

Route::get('photo/{id}', [CameraController::class, 'photo']);


