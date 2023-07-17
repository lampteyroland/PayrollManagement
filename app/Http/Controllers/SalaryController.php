<?php

namespace App\Http\Controllers;


use App\Models\Salary;
use Illuminate\Http\Request;

class SalaryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('Salaries.index', ['salaries' => Salary::latest()]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Salary $salary)
    {
        return view('Salaries.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request )
    {
        $formFields = $request->validate([
            'base_salary' => ['required', 'integer'],
            'pay_frequency' => 'required',
            'employee_id' => ['required'],

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
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
