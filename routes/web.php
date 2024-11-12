php artisan make:middleware VerificarEstadoPlanilla
<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Planillas\VuelosController;
use App\Http\Controllers\Planillas\PlanillasController;
use App\Http\Controllers\seguridad\UsuarioController;

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::middleware('auth')->group(function () {
// Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/', [App\Http\Controllers\HomeController::class, 'main'])->name('main');

    Route::resources([
    'usuario' => UsuarioController::class,
    ]);

    Route::get('/planillas', [PlanillasController::class, 'index'])->name('planillas.index');
    Route::get('/planillas/nueva', [PlanillasController::class, 'nueva'])->name('planillas.nueva');
    Route::get('/planillas/editar/{id}', [PlanillasController::class, 'editar'])->name('planillas.editar');
    Route::post('/planillas/store/{id?}', [PlanillasController::class, 'store'])->name('planillas.store');
    Route::get('/planillas/{id}/vuelos', [PlanillasController::class, 'vuelos'])->name('planillas.vuelos');
    route::get('/planillas/filtrar', [PlanillasController::class, 'filtrar'])->name('planillas.filtrar');
    Route::post('/planillas/finalizar/{id}', [PlanillasController::class, 'finalizar'])->name('planillas.finalizar');

    Route::get('/vuelos/nueva/{id}', [VuelosController::class, 'nueva'])->name('vuelos.nueva');
    Route::get('/vuelos/{id}/vuelos', [VuelosController::class, 'index'])->name('vuelos.index');
    Route::get('/vuelos/editar/{id}', [VuelosController::class, 'editar'])->name('vuelos.editar');
    Route::post('/vuelos/store/{id?}', [VuelosController::class, 'store'])->name('vuelos.store');
    Route::get('/vuelos/imprimir/{id}', [VuelosController::class, 'imprimir'])->name('vuelos.imprimir');
    Route::post('/vuelos/finalizar/{id}', [VuelosController::class, 'finalizar'])->name('vuelos.finalizar');
    Route::post('/vuelos/anular/{id}', [VuelosController::class, 'anular'])->name('vuelos.anular');
});
