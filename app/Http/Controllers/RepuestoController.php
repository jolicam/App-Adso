<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Repuesto;

class RepuestoController extends Controller
{
    //

    public function  getData (Request $request) {

        $repuestos= repuesto::all();

       return response()->json([
        'status' => '200',
        'message' => 'Data retrieved successfully',
        'result' => $repuestos,

    ]);

    }
    public function  save(Request $request) {

        $repuesto = Repuesto::create([
            'nombre' => $request->nombre,
            'precio' => $request->precio,
        ]);
        
        return response()->json([
            'status' => '200',
            'message' => 'Guardado con éxito',
            'data'=> $request->nombre,
        ]);
    


}
public function  update(Request $request) {

    $repuesto = Repuesto::findOrFail($request->id);

        $repuesto->update([
            'nombre' => $request->nombre,
            'precio' => $request->precio,
        ]);
        

    return response()->json([
        'status' => '200',
        'message' => 'Guardado con éxito',
        
    ]);

}
public function  Delete(Request $request) {
    
    $repuesto = Repuesto::findOrFail($request->id);
    $repuesto->delete();    

    return response()->json([
        'status' => '200',
        'message' => 'Guardado con éxito',
    ]);
}
}
