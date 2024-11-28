<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Factura;

class FacturaController extends Controller
{
    // Obtener todos los cargos
    public function getData(Request $request){

        $factura = Factura::all();

        return response()->json([
            'status' => '200',
            'message' => 'Data retrieved successfully', 
            'result' => $factura,
        ]);
    }

    // Obtener un cargo por ID
    public function getDataById(Request $request){

        $factura = Factura::where('id', $request->id)->get();

        return response()->json([
            'status' => '200',
            'message' => 'Data retrieved successfully', 
            'result' => $factura,
        ]);
    }

    // Guardar un nuevo cargo
    public function save(Request $request){

        $factura = Factura::create([
            'nombre' => $request->nombre,
            'salario' => $request->salario,
            'id_area' => $request->id_area,
        ]);

        return response()->json([
            'status' => '200',
            'message' => 'Guardado con éxito', 
            'data' => $factura, 
        ]);
    }

    // Actualizar un cargo existente
    public function update(Request $request){

        $factura = Factura::findOrFail($request->id);

        $factura->update([
            'nombre' => $request->nombre,
            'salario' => $request->salario,
            'id_area' => $request->id_area,
        ]);

        return response()->json([
            'status' => '200',
            'message' => 'Cargo actualizado con éxito', 
            'data' => $factura, 
        ]);
    }

    // Eliminar un cargo
    public function delete(Request $request){

        $factura = Factura::findOrFail($request->id);
        $factura->delete();

        return response()->json([
            'status' => '200',
            'message' => 'Cargo eliminado con éxito', // Mensaje actualizado
        ]);
    }
}
