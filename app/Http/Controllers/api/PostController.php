<?php

namespace App\Http\Controllers\api;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class PostController extends Controller
{
    // **
    // // show all data post
    // **
    public function index()
    {
        $data = Post::all();
        if ($data->count() >= 1) {
            return response()->json([
                'status' => 'success',
                'message' => 'Data ditemukan',
                'data' => $data
            ], 200);
        } else {
            return response()->json([
                'status' => 'error',
                'message' => 'Data tidak ditemukan',
                'data' => null
            ], 404);
        }
    }

    // **
    // //show post like id post
    // **
    public function show($post)
    {

        $data = Post::where('id', $post)->first();
        if ($data) {
            return response()->json([
                'status' => 'success',
                'message' => 'Data ditemukan',
                'data' => $data
            ], 200);
        } else {
            return response()->json([
                'status' => 'error',
                'message' => 'Data tidak ditemukan'
            ], 404);
        }
    }


    // **
    // // create new data post
    // **
    public function create(Request $request)
    {
        $validasi = Validator::make($request->all(), [
            'title' => ['required'],
            'content' => ['required'],
            'author' => ['required'],
            'published_date' => ['required'],
            'status' => ['required'],
        ]);

        if ($validasi->fails()) {
            return response()->json([
                'errors' => $validasi->errors(),
            ]);
        }

        $post = new Post;
        $post->title = $request->title;
        $post->content = $request->content;
        $post->author = $request->author;
        $post->published_date = $request->published_date;
        $post->status = $request->status;
        $saving = $post->save();

        if (!$saving) {
            return response()->json([
                'status' => 'error',
                'message' => 'Gagal Menambahkan Data'
            ], 401);
        }
        return response()->json([
            'status' => 'success',
            'message' => 'Berhasil menambahkan data',
            'data' => $saving
        ], 200);
    }

    // **
    // //update data post like id
    // **

    public function update(Request $request, Post $post)
    {


        $post->title = $request->title;
        $post->content = $request->content;
        $post->author = $request->author;
        $post->published_date = $request->published_date;
        $post->status = $request->status;
        $updated = $post->save();

        if (!$updated) {
            return response()->json([
                'status' => 'error',
                'message' => 'Gagal melakukan Update'
            ], 401);
        }

        return response()->json([
            'status' => 'success',
            'message' => 'Berhasil melakuakn Update',
            'data' => $post->get()
        ], 200);
    }
    // **
    // //delete data post like id
    // **
    public function destroy(Post $post)
    {
        $deleted = $post->delete();

        if ($deleted == False) {
            return response()->json([
                'status' => 'errors',
                'message' => 'Errors',
            ], 200);
        }
        return response()->json([
            'status' => 'success',
            'message' => 'Data berhasil di hapus',
        ], 200);
    }
}
