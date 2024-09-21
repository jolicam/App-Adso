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

Route::get('/cliente/getData', [ClienteController::class, 'getData']);
Route::post('/cliente/save', [ClienteController::class, 'save']);
Route::put('cliente/update', [ClienteController::class, 'update']);
Route::delete('/cliente/delete', [ClienteController::class, 'delete']);

Route::get('/especialidad/getData', [EspecialidadesController::class, 'getData']);
Route::post('/especialidad/save', [EspecialidadesController::class, 'save']);
Route::put('/especialidad/update', [EspecialidadesController::class, 'update']);
Route::delete('/especialidad/delete', [EspecialidadesController::class, 'delete']);

Route::get('/vehiculo/getData', [vehiculoController::class, 'getData']);
Route::post('/vehiculo/save', [vehiculoController::class, 'save']);
Route::put('/vehiculo/update', [vehiculoController::class, 'update']);
Route::delete('/vehiculo/delete', [vehiculoController::class, 'delete']);

Route::get('/mecanico/getData', [mecanicoController::class, 'getData']);
Route::post('/mecanico/save', [mecanicoController::class, 'save']);
Route::put('/mecanico/update', [mecanicoController::class, 'update']);
Route::delete('/mecanico/delete', [mecanicoController::class, 'delete']);

Route::get('/servicio/getData', [servicioController::class, 'getData']);
Route::post('/servicio/save', [servicioController::class, 'save']);
Route::put('/servicio/update', [servicioController::class, 'update']);
Route::delete('/servicio/delete', [servicioController::class, 'delete']);

Route::get('/repuesto/getData', [repuestoController::class, 'getData']);
Route::post('/repuesto/save', [repuestoController::class, 'save']);
Route::put('/repuesto/update', [repuestoController::class, 'update']);
Route::delete('/repuesto/delete', [repuestoController::class, 'delete']);

Route::get('/serviciomecanico/getData', [serviciomecanicoController::class, 'getData']);
Route::post('/serviciomecanico/save', [serviciomecanicoController::class, 'save']);
Route::put('/serviciomecanico/update', [serviciomecanicoController::class, 'update']);
Route::delete('/serviciomecanico/delete', [serviciomecanicoController::class, 'delete']);

Route::get('/factura/getData', [facturaController::class, 'getData']);
Route::post('/factura/save', [facturaController::class, 'save']);
Route::put('/factura/update', [facturaController::class, 'update']);
Route::delete('/factura/delete', [facturaController::class, 'delete']);

// Route::cotroller(AutoController::class)->group(function () {
//     Route::post('login', 'login');
//     Route::post('register', 'register');
//     Route::post('logout', 'logout');
//     Route::post('refresh', 'refresh');
//     Route::post('me', 'me');
// });