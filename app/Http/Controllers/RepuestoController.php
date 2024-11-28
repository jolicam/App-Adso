<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Repuesto;

class RepuestoController extends Controller
{
    // Obtener todos los repuestos
    public function getData(Request $request)
    {
        $repuestos = Repuesto::all();

        return response()->json([
            'status' => '200',
            'message' => 'data..', // Mensaje consistente con CargoController
            'result' => $repuestos,
        ]);
    }

    // Obtener un repuesto por ID
    public function getDataById(Request $request)
    {
        $repuesto = Repuesto::where('id', $request->id)->get();

        return response()->json([
            'status' => '200',
            'message' => 'data..', // Mensaje consistente con CargoController
            'result' => $repuesto,
        ]);
    }

    // Guardar un nuevo repuesto
    public function save(Request $request)
    {
        $repuesto = Repuesto::create([
            'nombre' => $request->nombre,
            'precio' => $request->precio,
        ]);

        return response()->json([
            'status' => '200',
            'message' => 'guardado con exito', // Mensaje consistente con CargoController
            'data' => $repuesto, // Se devuelve el objeto creado
        ]);
    }

    // Actualizar un repuesto existente
    public function update(Request $request)
    {
        $repuesto = Repuesto::findOrFail($request->id);

        $repuesto->update([
            'nombre' => $request->nombre,
            'precio' => $request->precio,
        ]);

        return response()->json([
            'status' => '200',
            'message' => 'actualizado con exito', // Mensaje consistente con CargoController
        ]);
    }

    // Eliminar un repuesto
    public function delete(Request $request)
    {
        $repuesto = Repuesto::findOrFail($request->id);
        $repuesto->delete();

        return response()->json([
            'status' => '200',
            'message' => 'Se elimino con exito', // Mensaje consistente con CargoController
        ]);
    }
}
