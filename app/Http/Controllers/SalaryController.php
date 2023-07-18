<?php

namespace App\Http\Controllers;


use App\Models\Employee;
use App\Models\Salary;
use App\Http\Controllers\EmployeeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Validation\Rule;

class SalaryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $employees = Employee::all();
        return view('Salaries.index', ['salaries' => Salary::latest()->paginate(5)], compact('employees'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Salary $salary )
    {

        $employees = Employee::all();
        return view('Salaries.create', compact('employees'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request )
    {
        $formFields = $request->validate([
            'base_salary' => 'required|numeric',
            'pay_frequency' => 'required',
            'employee_id' => ['required','exists:employees,id',
             Rule::unique('salaries', 'employee_id')],
        ]);

        Salary::create($formFields);

        return redirect('/salaries');


    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Salary $salary)
    {
        $employees = Employee::all();
        return view('Salaries.edit', ['salary' => $salary], compact('employees'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Salary $salary)
    {
        $formFields = $request->validate([
            'base_salary' => 'required|numeric',
            'pay_frequency' => 'required',
            'employee_id' => ['required','exists:employees,id',
                Rule::unique('salaries', 'employee_id')],
        ]);

        $salary->update($formFields);

        return redirect('/salaries');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
