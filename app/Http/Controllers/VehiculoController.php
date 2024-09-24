<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Vehiculo;

class VehiculoController extends Controller
{
    //

    public function  getData (Request $request) {

        $vehiculos = Vehiculo::all();  
        
        return response()->json([
            'status' => '200',
            'message' => 'Data retrieved successfully',
            'result' => $vehiculos,
        ]);


        return response()->json([
            'status' => '200',
            'message' => 'Data ...',
            'result' => $vehiculo,
        ]);

    }
    public function  save(Request $request) {
       
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
            'data' => $request->placa,
        ]);
}
public function  Update(Request $request) {
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
        'message' => 'Guardado con éxito',
        'data' => $vehiculo,
    ]);

}
public function  Delete(Request $request) {

    $vehiculo = Vehiculo::findOrFail($request->id);
    $vehiculo->delete();
        
    return response()->json([
        'status' => '200',
        'message' => 'Guardado con éxito',
    ]);
}
}
