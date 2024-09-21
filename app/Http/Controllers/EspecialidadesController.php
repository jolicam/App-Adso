<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\models\Especialidades;

class EspecialidadesController extends Controller
{
    //

    public function  getData (Request $request) {

        $especialidad = Especialidades::all();  
        
        return response()->json([
            'status' => '200',
            'message' => 'Data retrieved successfully',
            'result' => $especialidad,
        ]);
    }
    public function  save(Request $request) {
      
        $especialidad=Especialidades::create([
            'Nombre_especialidades'=>$request->Nombre_especialidades,
            
        ]);


        // $especialidad = new Especialidad();
        // $especialidad->Nombre_especialidades = $request->Nombre_especialidades; 
        // $especialidad->save();
       

        return response()->json([
            'status' => '200',
            'message' => 'Guardado con éxito',
            'data'=> $request->Nombre_especialidades, 
        ]);

}

public function  update(Request $request) {

    $especialidad=Especialidades::findOrFail($request->id);

    $especialidad->update([
        'Nombre_especialidades' => $request->Nombre_especialidades,
    ]);


    return response()->json([
        'status' => '200',
        'message' => 'Guardado con éxito',
    ]);

}
public function  Delete(Request $request) {

    $especialidad = Especialidades::findOrFail($request->id);
    $especialidad->delete();
        
    return response()->json([
        'status' => '200',
        'message' => 'Guardado con éxito',

    ]);
}
}