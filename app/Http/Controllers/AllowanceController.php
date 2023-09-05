<?php

namespace App\Http\Controllers;

use App\Models\Allowance;
use App\Models\Employee;
use Illuminate\Http\Request;

class AllowanceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('allowances.index', ['allowances' => Allowance::latest()->paginate(10)]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $currencies = [
            'USD' => 'United States Dollar',
            'EUR' => 'Euro',
            'GBP' => 'British Pound Sterling',
            'CEDI' => 'Ghana Cedi',
            'CFA' => 'CFA franc',
            // Add more currencies as needed
        ];
        $employees = Employee::all();
        return view('allowances.create', compact('employees', 'currencies'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'employee_id' => 'required|exists:employees,id',
            'allowance_name' => 'required|string|max:255',
            'allowance_amount' => 'required|numeric',
            'is_taxable' => 'required|boolean',
            'currency' => 'required|string|max:10',
            'allowance_date' => 'required|date',
            'remarks' => 'nullable|string|max:255',
        ]);
        Allowance::create($validatedData);
        // Redirect back with a success message or perform any other actions
        return redirect('/allowances')->with('message', 'Allowance added successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Allowance $allowance)
    {
        return  view('allowances.show', ['allowance' => $allowance]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Allowance $allowance)
    {
        $employees = Employee::all();
        $currencies = [
            'USD' => 'United States Dollar',
            'EUR' => 'Euro',
            'GBP' => 'British Pound Sterling',
            'CEDI' => 'Ghana Cedi',
            'CFA' => 'CFA franc',
            // Add more currencies as needed
        ];
        return view('allowances.edit', compact('allowance','employees', 'currencies'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Allowance $allowance)
    {
        $validatedData = $request->validate([
            'employee_id' => 'required|exists:employees,id',
            'allowance_name' => 'required|string|max:255',
            'allowance_amount' => 'required|numeric',
            'is_taxable' => 'required|boolean',
            'currency' => 'required|string|max:10',
            'allowance_date' => 'required|date',
            'remarks' => 'nullable|string|max:255',
        ]);
        $allowance->update($validatedData);
        // Redirect back with a success message or perform any other actions
        return redirect('/allowances')->with('message', 'Allowance updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Allowance $allowance)
    {
        $allowance->delete();
        return redirect('/allowances')->with('message', 'Allowance deleted successfully!');;
    }
}
