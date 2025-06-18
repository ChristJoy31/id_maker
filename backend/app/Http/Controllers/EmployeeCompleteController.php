<?php

namespace App\Http\Controllers;
use App\Models\EmployeeComplete;
use Illuminate\Http\Request;

class EmployeeCompleteController extends Controller
{
        public function index()
        {
           try {
            $employees = EmployeeComplete::all()->map(function ($employee) {
                $employee->full_name = trim("{$employee->first_name} {$employee->middle_name} {$employee->last_name}");
                return $employee;
            });

            return response()->json($employees);
                } catch (\Exception $e) {
                    return response()->json([
                        'error' => $e->getMessage(),
                        'line' => $e->getLine(),
                        'file' => $e->getFile()
                ], 500);
            }
        }
}
