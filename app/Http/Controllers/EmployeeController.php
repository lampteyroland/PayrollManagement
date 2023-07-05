<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class EmployeeController extends Controller
{

    // Show all employees
    public function  index(){
        return view('employees.index', ['employees' => Employee::all()]);
    }

    public function show(Employee $employee){
        return  view('employees.show', ['employee' => $employee]);
    }


    // Show create form
    public function create(Employee $employee){
        return view('employees.create');

    }


    // Store product information

    public function store(Request $request){
        $formFields = $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'other_name' => 'required',
            'title' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'dob' => 'required',
            'street_address' => 'required',
            'country' => 'required',
            'region' => 'required',
            'city' => 'required',
            'job_title' => 'required',
            'department' => 'required',
            'work_email' => 'required',
            'start_date' => 'required',
            'emergency_first_name' => 'required',
            'emergency_last_name' => 'required',
            'emergency_other_name' => 'required',
            'emergency_title' => 'required',
            'emergency_email' => 'required',
            'emergency_phone' => 'required',
            'emergency_dob'=> 'required',
            'emergency_street_address' => 'required',
        ]);

        Employee::create($formFields);

        return redirect('/employees');


    }

    public function edit(Employee $employee){
        return view('employees.edit', ['employee' => $employee]);
    }

    public function update(Request $request, Employee $employee){
        $formFields = $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'other_name' => 'required',
            'title' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'dob' => 'required',
            'street_address' => 'required',
            'country' => 'required',
            'region' => 'required',
            'city' => 'required',
            'job_title' => 'required',
            'department' => 'required',
            'work_email' => 'required',
            'start_date' => 'required',
            'emergency_first_name' => 'required',
            'emergency_last_name' => 'required',
            'emergency_other_name' => 'required',
            'emergency_title' => 'required',
            'emergency_email' => 'required',
            'emergency_phone' => 'required',
            'emergency_dob'=> 'required',
            'emergency_street_address' => 'required',
        ]);

        $employee->update($formFields);

        return redirect('/employees');

    }


    // Delete employee record
    public function destroy(Employee $employee){
        $employee->delete();
        return redirect('/employees');

    }

}
