<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FacturaController extends Controller
{
    //

    public function  getData (Request $request) {

        $rta= 10+20;
        return response()->json([
            'status' => '200',
            'message' => 'Data ...',
            'result' => $rta,
        ]);

    }
    public function  save(Request $request) {
        
        return response()->json([
            'status' => '200',
            'message' => 'Guardado con éxito',
        ]);
    


}
public function  Update(Request $request) {
        
    return response()->json([
        'status' => '200',
        'message' => 'Guardado con éxito',
    ]);

}
public function  Delete(Request $request) {
        
    return response()->json([
        'status' => '200',
        'message' => 'Guardado con éxito',
    ]);
}
}
