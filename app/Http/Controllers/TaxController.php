<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Tax;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class TaxController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $employees = Employee::all();
        return view('taxes.index', ['taxes' => Tax::latest()->paginate(10)], compact('employees'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $employees = Employee::all();
        return view('taxes.create', compact('employees'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $formFields = $request->validate([
            'tax_name' => 'required',
            'tax_date' => 'required',
            'tax_rate' => 'numeric',
            'tax_type' => 'required',
            'description' => 'required',
            'employee_id' => ['required','exists:employees,id']
//                Rule::unique('taxes', 'employee_id')],
        ]);

        Tax::create($formFields);

        return redirect('/taxes');


    }

    /**
     * Display the specified resource.
     */
    public function show(Tax $tax)
    {
        return  view('taxes.show', ['tax' => $tax]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tax $tax)
    {
        $employees = Employee::all();
        return view('taxes.edit', compact('tax','employees'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Tax $tax)
    {
        $formFields = $request->validate([
            'tax_name' => 'required',
            'tax_date' => 'required',
            'tax_rate' => 'numeric',
            'tax_type' => 'required',
            'description' => 'required',
            'employee_id' => ['required','exists:employees,id']
//                Rule::unique('taxes', 'employee_id')],
        ]);

        $tax->update($formFields);

        return redirect('/taxes');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tax $tax)
    {
        $tax->delete();
        return redirect('/salaries');
    }
}
