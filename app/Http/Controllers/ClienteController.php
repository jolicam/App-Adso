<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cliente;

class ClienteController extends Controller
{
    // Obtener todos los clientes
    public function getData(Request $request)
    {
        $clientes = Cliente::all();

        return response()->json([
            'status' => '200',
            'message' => 'data..',
            'result' => $clientes,
        ]);
    }

    // Obtener un cliente por ID
    public function getDataById(Request $request)
    {
        $cliente = Cliente::where('id', $request->id)->get();

        return response()->json([
            'status' => '200',
            'message' => 'data..',
            'result' => $cliente,
        ]);
    }

    // Guardar un cliente
    public function save(Request $request)
    {
        $cliente = Cliente::create([
            'nombre' => $request->nombre,
            'apellido' => $request->apellido,
            'identificacion' => $request->identificacion,
            'telefono' => $request->telefono,
            'correo_electronico' => $request->correo_electronico,
        ]);

        return response()->json([
            'status' => '200',
            'message' => 'guardado con éxito',
            'data' => $cliente,
        ]);
    }

    // Actualizar un cliente
    public function update(Request $request)
    {
        $cliente = Cliente::findOrFail($request->id);

        $cliente->update([
            'nombre' => $request->nombre,
            'apellido' => $request->apellido,
            'identificacion' => $request->identificacion,
            'telefono' => $request->telefono,
            'correo_electronico' => $request->correo_electronico,
        ]);

        return response()->json([
            'status' => '200',
            'message' => 'actualizado con éxito',
        ]);
    }

    // Eliminar un cliente
    public function delete(Request $request)
    {
        $cliente = Cliente::findOrFail($request->id);
        $cliente->delete();

        return response()->json([
            'status' => '200',
            'message' => 'se eliminó con éxito',
        ]);
    }
}
