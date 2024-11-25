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
            'message' => 'data..',
            'result' => $especialidades,
        ]);
    }

    // Obtener una especialidad por ID
    public function getDataById(Request $request)
    {
        $especialidad = Especialidades::where('id', $request->id)->get();

        return response()->json([
            'status' => '200',
            'message' => 'data..',
            'result' => $especialidad,
        ]);
    }

    // Guardar una especialidad
    public function save(Request $request)
    {
        $especialidad = Especialidades::create([
            'Nombre_especialidades' => $request->Nombre_especialidades,
        ]);

        return response()->json([
            'status' => '200',
            'message' => 'guardado con éxito',
            'data' => $especialidad,
        ]);
    }

    // Actualizar una especialidad
    public function update(Request $request)
    {
        $especialidad = Especialidades::findOrFail($request->id);

        $especialidad->update([
            'Nombre_especialidades' => $request->Nombre_especialidades,
        ]);

        return response()->json([
            'status' => '200',
            'message' => 'actualizado con éxito',
        ]);
    }

    // Eliminar una especialidad
    public function delete(Request $request)
    {
        $especialidad = Especialidades::findOrFail($request->id);
        $especialidad->delete();

        return response()->json([
            'status' => '200',
            'message' => 'se eliminó con éxito',
        ]);
    }
}
