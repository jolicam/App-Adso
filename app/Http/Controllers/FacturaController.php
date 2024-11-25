<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cargo;

class CargoController extends Controller
{
    // Obtener todos los cargos
    public function getData(Request $request){

        $cargo = Cargo::all();

        return response()->json([
            'status' => '200',
            'message' => 'Data retrieved successfully', // Cambiado a un mensaje más claro
            'result' => $cargo,
        ]);
    }

    // Obtener un cargo por ID
    public function getDataById(Request $request){

        $cargo = Cargo::where('id', $request->id)->get();

        return response()->json([
            'status' => '200',
            'message' => 'Data retrieved successfully', // Mensaje consistente con el anterior
            'result' => $cargo,
        ]);
    }

    // Guardar un nuevo cargo
    public function save(Request $request){

        $cargo = Cargo::create([
            'nombre' => $request->nombre,
            'salario' => $request->salario,
            'id_area' => $request->id_area,
        ]);

        return response()->json([
            'status' => '200',
            'message' => 'Guardado con éxito', // Mensaje en español de éxito
            'data' => $cargo, // Retornamos el objeto completo
        ]);
    }

    // Actualizar un cargo existente
    public function update(Request $request){

        $cargo = Cargo::findOrFail($request->id);

        $cargo->update([
            'nombre' => $request->nombre,
            'salario' => $request->salario,
            'id_area' => $request->id_area,
        ]);

        return response()->json([
            'status' => '200',
            'message' => 'Cargo actualizado con éxito', // Mensaje actualizado
            'data' => $cargo, // Retornamos el objeto actualizado
        ]);
    }

    // Eliminar un cargo
    public function delete(Request $request){

        $cargo = Cargo::findOrFail($request->id);
        $cargo->delete();

        return response()->json([
            'status' => '200',
            'message' => 'Cargo eliminado con éxito', // Mensaje actualizado
        ]);
    }
}
