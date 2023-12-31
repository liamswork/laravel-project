<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeController extends Controller
{
    public function displayEmployees()
    {
        $employees = Employee::with('company')->get();

        return view('employees', ['employees' => $employees]);
    }
}
