<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Especialidades;

class EspecialidadesController extends Controller
{
    // Obtener todas las especialidades
    public function getData(Request $request)
    {
        $especialidades = Especialidades::all();

        return response()->json([
            'status' => '200',
            'message' => 'Datos obtenidos con éxito',
            'result' => $especialidades
        ]);
    }

    // Obtener una especialidad por ID
    public function getDataById(Request $request)
    {
        //asi esta perfecto
        $especialidad = Especialidades::where('id', $request->id)->get();

        return response()->json([
            'status' => '200',
            'message' => 'Datos obtenidos con éxito',
            'result' => $especialidad
        ]);
    }

    // Guardar una nueva especialidad
    public function save(Request $request)
    {
        $especialidad = Especialidades::create([
            'nombre_especialidad' => $request->nombre_especialidad,     
        ]);

        return response()->json([
            'status' => '200',
            'message' => 'Especialidad guardada con éxito',
            'data' => $especialidad
        ]);
    }

    // Actualizar una especialidad existente
    public function update(Request $request)
    {
        $especialidad = Especialidades::findOrFail($request->id);

        $especialidad->update([
            'nombre_especialidad' => $request->nombre_especialidad,
        ]);

        return response()->json([
            'status' => '200',
            'message' => 'Especialidad actualizada con éxito',
        ]);
    }

    // Eliminar una especialidad
    public function delete(Request $request)
    {
        $especialidad = Especialidades::findOrFail($request->id);
        $especialidad->delete();

        return response()->json([
            'status' => '200',
            'message' => 'Especialidad eliminada con éxito',
        ]);
    }
}
