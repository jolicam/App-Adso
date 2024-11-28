<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ServicioMecanico;

class ServicioMecanicoController extends Controller
{
    // Obtener todos los servicios mecánicos
    public function getData(Request $request)
    {
        $serviciosMecanicos = ServicioMecanico::all();   
        
        return response()->json([
            'status' => '200',
            'message' => 'Data retrieved successfully',
            'result' => $serviciosMecanicos,
        ]);
    }

    // Obtener un servicio mecánico por ID
    public function getDataById(Request $request)
    {
        $servicioMecanico = ServicioMecanico::where('id', $request->id)->get();

        return response()->json([
            'status' => '200',
            'message' => 'Data retrieved successfully',
            'result' => $servicioMecanico,
        ]);
    }

    // Guardar un nuevo servicio mecánico
    public function save(Request $request)
    {
        $servicioMecanico = ServicioMecanico::create([
            'servicio_id' => $request->servicio_id,
            'mecanico_id' => $request->mecanico_id,
            'repuesto_id' => $request->repuesto_id,
        ]);

        return response()->json([
            'status' => '200',
            'message' => 'Guardado con éxito',
            'data' => $servicioMecanico,
        ]);
    }

    // Actualizar un servicio mecánico
    public function update(Request $request)
    {
        $servicioMecanico = ServicioMecanico::findOrFail($request->id);

        $servicioMecanico->update([
            'servicio_id' => $request->servicio_id,
            'mecanico_id' => $request->mecanico_id,
            'repuesto_id' => $request->repuesto_id,
        ]);
        
        return response()->json([
            'status' => '200',
            'message' => 'Actualizado con éxito',
        ]);
    }

    // Eliminar un servicio mecánico
    public function delete(Request $request)
    {
        $servicioMecanico = ServicioMecanico::findOrFail($request->id);
        $servicioMecanico->delete();
        
        return response()->json([
            'status' => '200',
            'message' => 'Eliminado con éxito',
        ]);
    }
}
