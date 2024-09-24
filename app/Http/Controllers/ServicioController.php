<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Servicio;

class ServicioController extends Controller
{
    
    public function getData(Request $request) 
    {
        $servicios = Servicio::all();  
        
        return response()->json([
            'status' => '200',
            'message' => 'Data retrieved successfully',
            'result' => $servicios,
        ]);

    }
    public function  save(Request $request) {

        $servicio = Servicio::create([
            'descripcion' => $request->descripcion,
            'costo' => $request->costo,
            'fecha' => $request->fecha,
            'vehiculo_placa' => $request->vehiculo_placa,
            'mecanico_id' => $request->mecanico_id
        ]);
        
        return response()->json([
            'status' => '200',
            'message' => 'Guardado con éxito',
            'data' => $request->descripcion,
        ]);
    


}
public function  Update(Request $request) {

    $servicio = Servicio::findOrFail($request->id);

    $servicio->update([
        'descripcion' => $request->descripcion,
        'costo' => $request->costo,
        'fecha' => $request->fecha,
        'vehiculo_placa' => $request->vehiculo_placa,
        'mecanico_id' => $request->mecanico_id
    ]);
        
    return response()->json([
        'status' => '200',
        'message' => 'Guardado con éxito',
        'data' => $servicio,
    ]);

}
public function  Delete(Request $request) {

    $servicio = Servicio::findOrFail($request->id);
    $servicio->delete();
        
    return response()->json([
        'status' => '200',
        'message' => 'Guardado con éxito',
    ]);
}
}
   
