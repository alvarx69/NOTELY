<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helpers\ApiResponse;
use App\Models\Note;

class ApiController extends Controller
{
    public function notas(){
        $datos = [
            'mensaje' => '',
        ];

        return response()->json($datos, 200);
    }
    public function index()
    {
        try
        {
            $notes = Note::all();
            return ApiResponse::success($notes, 'NOTAS OBTENIDAS CON EXITO');

        }catch(\Exception $e)
        {
            return ApiResponse::error('ERROR AL OBTENER LAS NOTAS');
        }
    }

    public function show($id)
    {
        try
        {
            $notes = Note::findOrFail($id);
            return ApiResponse::success($notes, 'NOTAS OBTENIDAS CON EXITO');

        }catch(\Exception $e)
        {
            return ApiResponse::error('ERROR: No existe la nota');
        }
    }

    public function store(Request $request)
    {
        try
        {
            $validateData = $request->validate([
                'title' => 'required',
                'description' =>'required',
                'user_id' => 'required'
            ]);
            $user_id = $request->user_id;
            $note = Note::create($validateData);
            $note->user_id = $user_id;
            $note->save;
            
            return ApiResponse::success($note, 'NOTA AÑADIDA CON EXITO');

        }catch(\Exception $e)
        {
            return ApiResponse::error('ERROR: no se ha podido añadir la nota'. $e->getMessage());
        }
    }

    public function update($id, Request $request)
    {
        try
        {
            $note = Note::findOrFail($id);
            $note->update([
                'title' => $request->title,
                'description' => $request->description
            ]);
            
            return ApiResponse::success($note, 'NOTA EDITADA CON EXITO');

        }catch(\Exception $e)
        {
            return ApiResponse::error('ERROR: no se ha podido editar la nota'. $e->getMessage());
        }
    }

    public function destroy($id)
    {
        try
        {
            $note = Note::findOrFail($id);
            $note->delete();
            
            return ApiResponse::success($note, 'NOTA ELIMINADA CON EXITO');

        }catch(\Exception $e)
        {
            return ApiResponse::error('ERROR: no se ha podido eliminar la nota'. $e->getMessage());
        }
    }
    
}
