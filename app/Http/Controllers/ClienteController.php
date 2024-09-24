<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cliente;

class ClienteController extends Controller
{
    

    public function  getData (Request $request) {

        $clientes = Cliente::all();  
        
        return response()->json([
            'status' => '200',
            'message' => 'Data ...',
            'result' => $clientes,
        ]);


        return response()->json([
            'status' => '200',
            'message' => 'Data ...',
            'result' => $cliente,
        ]);

    }
    public function  save(Request $request) {


        $cliente = Cliente::create([
            'nombre' => $request->nombre,
            'apellido' => $request->apellido,
            'Identificacion' => $request->identificacion,
            'telefono' => $request->telefono,
            'correo_electronico' => $request->correo_electronico,
        ]);
      

        return response()->json([
            'status' => '200',
            'message' => 'Guardado con éxito',
            'data'=>$request->nombre,
        ]);
    
}

public function  update(Request $request) {

    $cliente=Cliente::findOrFail($request->id);
    
    $cliente->update([
        'nombre' => $request->nombre,
        'apellido' => $request->apellido,
        'Identificacion' => $request->identificacion,
        'telefono' => $request->telefono,
        'correo_electronico' => $request->correo_electronico,

    ]);

    return response()->json([
        'status' => '200',
        'message' => 'Guardado con éxito',
        'result' => $cliente,   
    ]);

}
public function  Delete(Request $request) {

    $cliente = cliente::findOrFail($request->id);
    $cliente->delete();
        

    return response()->json([
        'status' => '200',
        'message' => 'Guardado con éxito',
    ]);
}
}