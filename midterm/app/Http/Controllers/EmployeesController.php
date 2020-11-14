<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employees;

class EmployeesController extends Controller
{
    public function viewAllEmployee()
    {
        $employees = Employees::all();
        return view('all-employees')->with('employees', $employees);
    }

    public function addNewEmployee(Request $request)
    {
        Employees::create([
            'name' => $request->name,
            'lastname' => $request->lastname,
            'birthdate' => $request->birthdate,
            'personal_id' => $request->personal_id,
            'salary' => $request->salary,
        ]);
        
        return redirect()->route('employees.all');
    }

    public function deleteEmployee(Request $request)
    {
        Employees::where('id', $request->employee_id)->delete();

        return redirect()->route('employees.all');
    }

    public function editEmployee(Request $request, $id)
    {
        $employee = Employees::where('id', $id)->first();

        return view('edit-employee')->with('employee', $employee);

    }

    public function updateEmployee(Request $request, $id)
    {
        $employee = Employees::where('id', $id)->update([
            'name' => $request->name,
            'lastname' => $request->lastname,
            'birthdate' => $request->birthdate,
            'personal_id' => $request->personal_id,
            'salary' => $request->salary,
        ]);

        return redirect()->route('employees.all');
    } 
        
}

