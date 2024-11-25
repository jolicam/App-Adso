<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Vehiculo;

class VehiculoController extends Controller
{
    
    public function getData(Request $request)
    {
        $vehiculos = Vehiculo::all();  
        
        return response()->json([
            'status' => '200',
            'message' => 'Data retrieved successfully',
            'result' => $vehiculos,
        ]);
    }

    
    public function getDataById(Request $request)
    {
        $vehiculo = Vehiculo::where('id', $request->id)->get();

        return response()->json([
            'status' => '200',
            'message' => 'Data retrieved successfully',
            'result' => $vehiculo,
        ]);
    }

    
    public function save(Request $request)
    {
        $vehiculo = Vehiculo::create([
            'placa' => $request->placa,
            'marca' => $request->marca,
            'modelo' => $request->modelo,
            'año' => $request->año,
            'cliente_id' => $request->cliente_id,
        ]);

        return response()->json([
            'status' => '200',
            'message' => 'Guardado con éxito',
            'data' => $vehiculo,
        ]);
    }

    
    public function update(Request $request)
    {
        $vehiculo = Vehiculo::findOrFail($request->id);

        $vehiculo->update([
            'placa' => $request->placa,
            'marca' => $request->marca,
            'modelo' => $request->modelo,
            'año' => $request->año,
            'cliente_id' => $request->cliente_id,
        ]);

        return response()->json([
            'status' => '200',
            'message' => 'Actualizado con éxito',
            'data' => $vehiculo,
        ]);
    }

    
    public function delete(Request $request)
    {
        $vehiculo = Vehiculo::findOrFail($request->id);
        $vehiculo->delete();

        return response()->json([
            'status' => '200',
            'message' => 'Eliminado con éxito',
        ]);
    }
}
