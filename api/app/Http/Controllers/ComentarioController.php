<?php

namespace App\Http\Controllers;

use App\Models\Comentario;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ComentarioController extends Controller
{
    public function getAll(): JsonResponse
    {
        return response()->json(Comentario::all());
    }

    public function getById($id): JsonResponse
    {
        return response()->json(Comentario::find($id));
    }

    public function createComment(Request $request)
    {

        $comentario = [
            'id_post' => $request->input("id_post"),
            'nombre' => $request->input("nombre"),
            'mensaje' => $request->input("mensaje")
        ];
        return response()->json(Comentario::create($comentario)->fresh());
    }

    public function getCommentsByIdPost($idPost){
        return response()->json(Comentario::where('id_post', $idPost)->get());
    }
}
