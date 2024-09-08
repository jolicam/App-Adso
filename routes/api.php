<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\EspecialidadController;
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
Route::put('/cliente/Update', [ClienteController::class, 'Update']);
Route::delete('/cliente/delete', [ClienteController::class, 'delete']);

Route::get('/especialidad/getData', [especialidadController::class, 'getData']);
Route::post('/especialidad/save', [especialidadController::class, 'save']);
Route::put('/especialidad/Update', [especialidadController::class, 'Update']);
Route::delete('/especialidad/delete', [especialidadController::class, 'delete']);

Route::get('/vehiculo/getData', [vehiculoController::class, 'getData']);
Route::post('/vehiculo/save', [vehiculoController::class, 'save']);
Route::put('/vehiculo/Update', [vehiculoController::class, 'Update']);
Route::delete('/vehiculo/delete', [vehiculoController::class, 'delete']);

Route::get('/mecanico/getData', [mecanicoController::class, 'getData']);
Route::post('/mecanico/save', [mecanicoController::class, 'save']);
Route::put('/mecanico/Update', [mecanicoController::class, 'Update']);
Route::delete('/mecanico/delete', [mecanicoController::class, 'delete']);

Route::get('/servicio/getData', [servicioController::class, 'getData']);
Route::post('/servicio/save', [servicioController::class, 'save']);
Route::put('/servicio/Update', [servicioController::class, 'Update']);
Route::delete('/servicio/delete', [servicioController::class, 'delete']);

Route::get('/repuesto/getData', [repuestoController::class, 'getData']);
Route::post('/repuesto/save', [repuestoController::class, 'save']);
Route::put('/repuesto/Update', [repuestoController::class, 'Update']);
Route::delete('/repuesto/delete', [repuestoController::class, 'delete']);

Route::get('/serviciomecanico/getData', [serviciomecanicoController::class, 'getData']);
Route::post('/serviciomecanico/save', [serviciomecanicoController::class, 'save']);
Route::put('/serviciomecanico/Update', [serviciomecanicoController::class, 'Update']);
Route::delete('/serviciomecanico/delete', [serviciomecanicoController::class, 'delete']);

Route::get('/factura/getData', [facturaController::class, 'getData']);
Route::post('/factura/save', [facturaController::class, 'save']);
Route::put('/factura/Update', [facturaController::class, 'Update']);
Route::delete('/factura/delete', [facturaController::class, 'delete']);

// Route::cotroller(AutoController::class)->group(function () {
//     Route::post('login', 'login');
//     Route::post('register', 'register');
//     Route::post('logout', 'logout');
//     Route::post('refresh', 'refresh');
//     Route::post('me', 'me');
// });