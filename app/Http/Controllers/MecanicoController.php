<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Mecanico;

class MecanicoController extends Controller
{
    // Obtener todos los mecánicos
    public function getData(Request $request)
    {
        $mecanicos = Mecanico::all();

        return response()->json([
            'status' => '200',
            'message' => 'data..', // Mensaje similar al de CargoController
            'result' => $mecanicos,
        ]);
    }

    // Obtener un mecánico por ID
    public function getDataById(Request $request)
    {
        $mecanico = Mecanico::where('id', $request->id)->get();

        return response()->json([
            'status' => '200',
            'message' => 'data..', // Consistente con el mensaje en getData
            'result' => $mecanico,
        ]);
    }

    // Guardar un nuevo mecánico
    public function save(Request $request)
    {
        $mecanico = Mecanico::create([
            'nombre' => $request->nombre,
            'apellido' => $request->apellido,
            'documento' => $request->documento,
            'telefono' => $request->telefono,
            'especialidad_id' => $request->especialidad_id,
        ]);

        return response()->json([
            'status' => '200',
            'message' => 'guardado con exito', // Mensaje consistente con CargoController
            'data' => $mecanico, // Devolviendo el objeto creado
        ]);
    }

    // Actualizar un mecánico existente
    public function update(Request $request)
    {
        $mecanico = Mecanico::findOrFail($request->id);

        $mecanico->update([
            'nombre' => $request->nombre,
            'apellido' => $request->apellido,
            'documento' => $request->documento,
            'telefono' => $request->telefono,
            'especialidad_id' => $request->especialidad_id,
        ]);

        return response()->json([
            'status' => '200',
            'message' => 'actualizado con exito', // Mensaje consistente con CargoController
        ]);
    }

    // Eliminar un mecánico
    public function delete(Request $request)
    {
        $mecanico = Mecanico::findOrFail($request->id);
        $mecanico->delete();

        return response()->json([
            'status' => '200',
            'message' => 'Se elimino con exito', // Mensaje consistente con CargoController
        ]);
    }
}
