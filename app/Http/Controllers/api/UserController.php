<?php

namespace App\Http\Controllers\api;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

class UserController extends Controller
{

    public function userAll()
    {
        $data = User::all();
        return response()->json([
            'status' => "success",
            'message' => 'Data ditemukan',
            'data' => $data
        ]);
    }
    // Registrasi

    public function register(Request $request)
    {
        $validasi = Validator::make($request->all(), [
            'name' => ['required'],
            'email' => ['required', 'unique:users', 'email'],
            'password' => ['min:8'],
            'role' => ['required'],
        ]);

        if ($validasi->fails()) {
            return response()->json([
                'errors' => $validasi->errors(),
            ]);
        }

        $regis = User::create([
            "name" => $request->name,
            "email" => $request->email,
            "password" => Hash::make($request->password),
            "role" => $request->role,
        ]);

        if ($regis) {
            return response()->json([
                'status' => 'success',
                'message' => 'Registrasi Berhasil',
            ], 200);
        } else {
            return response()->json([
                'status' => 'failed',
                'messgae' => 'Gagal melakukan registrasi'
            ], 501);
        }
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $user = User::where('email', $request->email)->first();

        if (!$user || !Hash::check($request->password, $user->password)) {
            throw ValidationException::withMessages([
                'email' => ['The provided credentials are incorrect.'],
            ]);
        }

        return $user->createToken('user')->plainTextToken;
    }
}
