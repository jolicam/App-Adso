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
// Las demás rutas
*/

// Agrupación de rutas para ClienteController
Route::controller(ClienteController::class)->group(function () {
    Route::get('/cliente/getData', 'getData');
    Route::get('/cliente/getDataById/{id}', 'getDataById');  // Ruta agregada para obtener un cliente por ID
    Route::post('/cliente/save', 'save');
    Route::put('/cliente/update', 'update');
    Route::delete('/cliente/delete', 'delete');
});

// Agrupación de rutas para EspecialidadesController
Route::controller(EspecialidadesController::class)->group(function () {
    Route::get('/especialidad/getData', 'getData');
    Route::get('/especialidad/getDataById/{id}', 'getDataById');  // Ruta agregada para obtener especialidad por ID
    Route::post('/especialidad/save', 'save');
    Route::put('/especialidad/update', 'update');
    Route::delete('/especialidad/delete', 'delete');
});

// Agrupación de rutas para VehiculoController
Route::controller(VehiculoController::class)->group(function () {
    Route::get('/vehiculo/getData', 'getData');
    Route::get('/vehiculo/getDataById/{id}', 'getDataById');  // Ruta agregada para obtener vehículo por ID
    Route::post('/vehiculo/save', 'save');
    Route::put('/vehiculo/update', 'update');
    Route::delete('/vehiculo/delete', 'delete');
});

// Agrupación de rutas para MecanicoController
Route::controller(MecanicoController::class)->group(function () {
    Route::get('/mecanico/getData', 'getData');
    Route::get('/mecanico/getDataById/{id}', 'getDataById');  // Ruta agregada para obtener mecánico por ID
    Route::post('/mecanico/save', 'save');
    Route::put('/mecanico/update', 'update');
    Route::delete('/mecanico/delete', 'delete');
});

// Agrupación de rutas para ServicioController
Route::controller(ServicioController::class)->group(function () {
    Route::get('/servicio/getData', 'getData');
    Route::get('/servicio/getDataById/{id}', 'getDataById');  // Ruta agregada para obtener servicio por ID
    Route::post('/servicio/save', 'save');
    Route::put('/servicio/update', 'update');
    Route::delete('/servicio/delete', 'delete');
});

// Agrupación de rutas para RepuestoController
Route::controller(RepuestoController::class)->group(function () {
    Route::get('/repuesto/getData', 'getData');
    Route::get('/repuesto/getDataById/{id}', 'getDataById');  // Ruta agregada para obtener repuesto por ID
    Route::post('/repuesto/save', 'save');
    Route::put('/repuesto/update', 'update');
    Route::delete('/repuesto/delete', 'delete');
});

// Agrupación de rutas para ServiciomecanicoController
Route::controller(ServiciomecanicoController::class)->group(function () {
    Route::get('/serviciomecanico/getData', 'getData');
    Route::get('/serviciomecanico/getDataById/{id}', 'getDataById');  // Ruta agregada para obtener serviciomecánico por ID
    Route::post('/serviciomecanico/save', 'save');
    Route::put('/serviciomecanico/update', 'update');
    Route::delete('/serviciomecanico/delete', 'delete');
});

// Agrupación de rutas para FacturaController
Route::controller(FacturaController::class)->group(function () {
    Route::get('/factura/getData', 'getData');
    Route::get('/factura/getDataById/{id}', 'getDataById');  // Ruta agregada para obtener factura por ID
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

