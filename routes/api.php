<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\EspecialidadesController;
use App\Http\Controllers\VehiculoController;
use App\Http\Controllers\MecanicoController;
use App\Http\Controllers\ServicioController;
use App\Http\Controllers\RepuestoController;
use App\Http\Controllers\ServiciomecanicoController;
use App\Http\Controllers\FacturaController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Agrupación de rutas para ClienteController
Route::controller(ClienteController::class)->group(function () {
    Route::get('/cliente/getData', 'getData');
    Route::post('/cliente/save', 'save');
    Route::put('/cliente/update', 'update');
    Route::delete('/cliente/delete', 'delete');
});

// Agrupación de rutas para EspecialidadesController
Route::controller(EspecialidadesController::class)->group(function () {
    Route::get('/especialidad/getData', 'getData');
    Route::post('/especialidad/save', 'save');
    Route::put('/especialidad/update', 'update');
    Route::delete('/especialidad/delete', 'delete');
});

// Agrupación de rutas para VehiculoController
Route::controller(VehiculoController::class)->group(function () {
    Route::get('/vehiculo/getData', 'getData');
    Route::post('/vehiculo/save', 'save');
    Route::put('/vehiculo/update', 'update');
    Route::delete('/vehiculo/delete', 'delete');
});

// Agrupación de rutas para MecanicoController
Route::controller(MecanicoController::class)->group(function () {
    Route::get('/mecanico/getData', 'getData');
    Route::post('/mecanico/save', 'save');
    Route::put('/mecanico/update', 'update');
    Route::delete('/mecanico/delete', 'delete');
});

// Agrupación de rutas para ServicioController
Route::controller(ServicioController::class)->group(function () {
    Route::get('/servicio/getData', 'getData');
    Route::post('/servicio/save', 'save');
    Route::put('/servicio/update', 'update');
    Route::delete('/servicio/delete', 'delete');
});

// Agrupación de rutas para RepuestoController
Route::controller(RepuestoController::class)->group(function () {
    Route::get('/repuesto/getData', 'getData');
    Route::post('/repuesto/save', 'save');
    Route::put('/repuesto/update', 'update');
    Route::delete('/repuesto/delete', 'delete');
});

// Agrupación de rutas para ServiciomecanicoController
Route::controller(ServiciomecanicoController::class)->group(function () {
    Route::get('/serviciomecanico/getData', 'getData');
    Route::post('/serviciomecanico/save', 'save');
    Route::put('/serviciomecanico/update', 'update');
    Route::delete('/serviciomecanico/delete', 'delete');
});

// Agrupación de rutas para FacturaController
Route::controller(FacturaController::class)->group(function () {
    Route::get('/factura/getData', 'getData');
    Route::post('/factura/save', 'save');
    Route::put('/factura/update', 'update');
    Route::delete('/factura/delete', 'delete');
});

// Ejemplo para rutas de autenticación
// Route::controller(AuthController::class)->group(function () {
//     Route::post('login', 'login');
//     Route::post('register', 'register');
//     Route::post('logout', 'logout');
//     Route::post('refresh', 'refresh');
//     Route::get('me', 'me');
// });
