<?php

namespace App\Http\Controllers;

use App\Models\Dependent;

use App\Models\Employee;
use Illuminate\Http\Request;

class DependentController extends Controller
{
    // Show all dependents
    public function index() {
        return view('dependents/index', [
            'dependents' => Dependent::all()
        ]);
    }

    //Show single dependents
    public function show(Dependent $dependent) {
        return view('dependents/show', [
            'dependent' => $dependent,
        ]);
    }

    // Show Create Form
    public function create() {
        return view('dependents/create', [
            'dependent' => "dependent",
        ]);    }

    // Store Dependent Data
    public function store(Request $request) {
        $formFields = $request->validate([
            'name' => 'required',
        ]);
        Dependent::create($formFields);

        return redirect('/')->with('message', 'Dependent created successfully!');
    }

    // Show Edit Form
    public function edit(Dependent $dependent) {
        return view('dependents/edit', [
            'dependent' => $dependent,
    ]);
    }

    // Update Dependent Data
    public function update(Request $request, Dependent $dependent) {
        $formFields = $request->validate([
            'name' => 'required',
        ]);

        $dependent->update($formFields);
        return redirect('/')->with('message', 'Employee updated successfully!');
    }

    // Delete Employee
    public function destroy(Dependent $dependent) {
        $dependent->delete();
        return redirect('/')->with('message', 'Employee deleted successfully');
    }
}
