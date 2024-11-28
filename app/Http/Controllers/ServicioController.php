<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Servicio;

class ServicioController extends Controller
{
    // Obtener todos los servicios
    public function getData(Request $request)
    {
        $servicios = Servicio::all();

        return response()->json([
            'status' => '200',
            'message' => 'data..', // Mensaje consistente con CargoController
            'result' => $servicios,
        ]);
    }

    // Obtener un servicio por ID
    public function getDataById(Request $request)
    {
        $servicio = Servicio::where('id', $request->id)->get();

        return response()->json([
            'status' => '200',
            'message' => 'data..', // Mensaje consistente con CargoController
            'result' => $servicio,
        ]);
    }

    // Guardar un nuevo servicio
    public function save(Request $request)
    {
        $servicio = Servicio::create([
            'descripcion' => $request->descripcion,
            'costo' => $request->costo,
            'fecha' => $request->fecha,
            'vehiculo_placa' => $request->vehiculo_placa,
            'mecanico_id' => $request->mecanico_id,
        ]);

        return response()->json([
            'status' => '200',
            'message' => 'guardado con exito', 
            'data' => $servicio, 
        ]);
    }

    // Actualizar un servicio existente
    public function update(Request $request)
    {
        $servicio = Servicio::findOrFail($request->id);

        $servicio->update([
            'descripcion' => $request->descripcion,
            'costo' => $request->costo,
            'fecha' => $request->fecha,
            'vehiculo_placa' => $request->vehiculo_placa,
            'mecanico_id' => $request->mecanico_id,
        ]);

        return response()->json([
            'status' => '200',
            'message' => 'actualizado con exito', 
        ]);
    }

    // Eliminar un servicio
    public function delete(Request $request)
    {
        $servicio = Servicio::findOrFail($request->id);
        $servicio->delete();

        return response()->json([
            'status' => '200',
            'message' => 'Se elimino con exito', 
        ]);
    }
}
