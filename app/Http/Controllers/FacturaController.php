<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Factura;

class FacturaController extends Controller
{
    //

    public function  getData (Request $request) {

        $factura= Factura::all();


        return response()->json([
            'status' => '200',
            'message' => 'Data ...',
            'result' => $factura,
        ]);

    }
    public function  save(Request $request) {
        
        $factura = Factura::create([
            'fecha' => $request->fecha,
            'total' => $request->total,
            'cliente_id' => $request->cliente_id,
        ]);
        return response()->json([
            'status' => '200',
            'message' => 'Guardado con éxito',
            'data'=> $request->fecha,
        ]);
    
}
public function  Update(Request $request) {

    $factura = Factura::findOrFail($request->id);

    $factura->update([
        'fecha' => $request->fecha,
        'total' => $request->total,
        'cliente_id' => $request->cliente_id,
    ]);
        
    return response()->json([
        'status' => '200',
        'message' => 'Guardado con éxito',
        'data' => $factura,

    ]);

}
public function  Delete(Request $request) {

    $factura = Factura::findOrFail($request->id);
    $factura->delete();
        

    return response()->json([
        'status' => '200',
        'message' => 'Guardado con éxito',
    ]);
}
}
