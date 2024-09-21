<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Mecanico;

class MecanicoController extends Controller
{
    //

    public function  getData (Request $request) {

        $mecanicos = Mecanico::all();  
        
        return response()->json([
            'status' => '200',
            'message' => 'Data retrieved successfully',
            'result' => $mecanicos,
        ]);

        return response()->json([
            'status' => '200',
            'message' => 'Data ...',
            'result' => $mecanico,
        ]);

    }
    public function  save(Request $request) {

        $mecanico = Mecanico::create([
            'nombre' => $request->nombre,
            'apellido' => $request->apellido,
            'documento' => $request->documento,
            'telefono' => $request->telefono,
            'especialidad_id' => $request->especialidad_id,
        ]);
        
        return response()->json([
            'status' => '200',
            'message' => 'Guardado con éxito',
            'data'=> $request->nombre,
        ]);
    


}
public function  Update(Request $request) {

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
        'message' => 'Guardado con éxito',
        'data' => $mecanico,
    ]);

}
public function  Delete(Request $request) {

    $mecanico = Mecanico::findOrFail($request->id);
    $mecanico->delete();
        
    return response()->json([
        'status' => '200',
        'message' => 'Guardado con éxito',
    ]);
}
}
   