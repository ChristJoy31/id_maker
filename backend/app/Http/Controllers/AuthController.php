<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{

    public function index(){
        return response()->json(User::all());
    }
     public function login(Request $request)
            {
            try {
                if (Auth::attempt([
                    'email' => $request->email,
                    'password' => $request->password,
                ])) {
                    $user = Auth::user();
                    $token = $user->createToken('mytoken')->plainTextToken;

                    return response()->json([
                        'message' => 'Login successful',
                        'token' => $token,
                        'role' => $user->role,
                    ]);
                } else {
                    return response()->json([
                        'message' => 'Invalid credentials',
                    ], 401);
                }
            } catch (\Exception $e) {
                return response()->json([
                    'message' => 'Something went wrong during login.',
                    'error' => $e->getMessage()
                ], 500);
            }
        }

    
}
