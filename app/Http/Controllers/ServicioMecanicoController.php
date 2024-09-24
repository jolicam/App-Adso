<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ServicioMecanico;

class ServicioMecanicoController extends Controller
{
    //

    public function  getData (Request $request) {

        $serviciosMecanicos = ServicioMecanico::all();   
        
        return response()->json([
            'status' => '200',
            'message' => 'Data retrieved successfully',
            'result' => $serviciosMecanicos,
        ]);
    }

   
    public function save(Request $request)
    {
    
        $servicioMecanico = ServicioMecanico::create([
            'servicio_id' => $request->servicio_id,
            'mecanico_id' => $request->mecanico_id,
            'repuesto_id' => $request->repuesto_id
        ]);

        return response()->json([
            'status' => '200',
            'message' => 'Guardado con éxito',
            'date' => $request->servicio_id,
        ]);
    
}
public function  Update(Request $request) {

    $servicioMecanico = ServicioMecanico::findOrFail($request->id);

        $servicioMecanico->update([
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
public function  Delete(Request $request) {

    $servicioMecanico = ServicioMecanico::findOrFail($request->id);
    $servicioMecanico->delete();
        

    return response()->json([
        'status' => '200',
        'message' => 'Guardado con éxito',
    ]);
}
}