<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function getAll(): JsonResponse
    {
        return response()->json(Post::all());
    }

    public function getById($id): JsonResponse
    {
        return response()->json(Post::find($id));
    }

    public function createPost(Request $request)
    {

        $post = [
            'titulo' => $request->input("titulo"),
            'body' => $request->input("body")
        ];
        return response()->json(Post::create($post)->fresh());
    }
}
