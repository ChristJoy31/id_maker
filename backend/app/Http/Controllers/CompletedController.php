<?php

namespace App\Http\Controllers;
use App\Models\Complete;
use Illuminate\Http\Request;

class CompletedController extends Controller
{

    public function index(){
       $students = Complete::all()->map(function ($student) {
        $student->full_name = trim("{$student->first_name} {$student->middle_name} {$student->last_name}");
        return $student;
    });

    return response()->json($students);
    }


     public function store(Request $request)
        {
            try {
                $request->validate([
                    'first_name' => 'required|string|max:255',
                    'last_name' => 'required|string|max:255',
                    'middle_name' => 'nullable|string|max:255',
                    'address' => 'required|string|max:255',
                    'course' => 'required|string|max:255',
                    'student_id' => 'required|string|max:255',
                    'contact' => 'required|string|max:20',
                    'emergency_contact' => 'required|array',
                    'emergency_contact.name' => 'required|string|max:255',
                    'emergency_contact.number' => 'required|string|max:15',
                    'birth_date' => 'required|date',
                    'signature' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                    'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                    'qr_code' => 'nullable|string|max:255',
                ]);
                    $existing = Complete::where('student_id', $request->student_id)->first();
                    if ($existing) {
                        return response()->json([
                            'message' => 'Student already exists.',
                            'student' => $existing
                        ], 409); 
                    }

                $student = Complete::create([
                    'first_name' => $request->first_name,
                    'last_name' => $request->last_name,
                    'middle_name' => $request->middle_name,
                    'address' => $request->address,
                    'course' => $request->course,
                    'student_id' => $request->student_id,
                    'contact' => $request->contact,
                    'emergency_contact' => $request->emergency_contact,
                    'birth_date' => $request->birth_date,
                    'signature' => $request->file('signature') ? $request->file('signature')->store('signatures') : null,
                    'image' => $request->file('image') ? $request->file('image')->store('images') : null,
                    'qr_code' => $request->qr_code,
                ]);

                return response()->json([
                    'message' => 'Student created successfully',
                    'student' => $student
                ], 201);
            } catch (\Illuminate\Validation\ValidationException $e) {
                return response()->json([
                    'message' => 'Validation failed',
                    'errors' => $e->errors()
                ], 422);
            } catch (\Exception $e) {
                return response()->json([
                    'message' => 'Server error',
                    'error' => $e->getMessage()
                ], 500);
            }
        }

       
}
