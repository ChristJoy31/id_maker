<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;
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

    

    public function list()
        {
            try {
                $response = Http::withHeaders([
                    'x-api-key' => config('system.api_key'),
                    'Origin' => 'http://idmaker.test',
                    'Content-Type' => 'application/json',
                ])->get("http://api-portal.mlgcl.edu.ph/api/external/student-list");

                \Log::info('API Response', ['status' => $response->status(), 'body' => $response->body()]);

                if ($response->failed()) {
                    return response()->json([
                        'error' => 'Failed to fetch from external API',
                        'details' => $response->body()
                    ], $response->status());
                }

                return response()->json($response->json());

            } catch (\Exception $e) {
                \Log::error('API CALL FAILED', ['message' => $e->getMessage(), 'trace' => $e->getTraceAsString()]);
                return response()->json([
                    'error' => 'Server Error',
                    'message' => $e->getMessage()
                ], 500);
            }
        }

      public function logout(Request $request)
        {
            $user = Auth::user();

            if (!$user) {
                return response()->json([
                    'message' => 'Unauthorized'
                ], 401);
            }

            $user->tokens()->delete();

            return response()->json([
                'message' => 'Logout successful',
            ]);
        }

       public function profile(){        
            $user = auth()->user();
            $fullName = trim("{$user->first_name} {$user->middle_name} {$user->last_name}");
            
            return response()->json([
                'full_name' => $fullName,
            ]);
        }
}
