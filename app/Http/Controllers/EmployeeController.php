<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Dependent;
use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    // Show all employees
    public function index() {
        return view('employess/index', [
            'employees' => Employee::all()
        ]);
    }

    //Show single employee
    public function show(Employee $employee) {
        return view('employess/show', [
            'employee' => $employee
        ]);
    }

    // Show Create Form
    public function create() {
        return view('employess/create', [
            'employee' => null,
            'dependents' => Dependent::all(),
            'departments' => Department::all(),
    ]);
    }

    // Store Employee Data
    public function store(Request $request) {
        // dd($request->all());
        $formFields = $request->validate([
            'name' => 'required',
            'department_id' => 'required',
            'dependent_id' => 'required',
            'salary' => 'required',
        ]);

        if($request->hasFile('img')) {
            $formFields['img'] = $request->file('img')->store('imgs', 'public');
        }
        Employee::create($formFields);

        return redirect('/')->with('message', 'Employee created successfully!');
    }

    // Show Edit Form
    public function edit(Employee $employee) {
        return view('employess/edit', [
            'employee' => $employee,
            'dependents' => Dependent::all(),
            'departments' => Department::all(),
    ]);
    }

    // Update Employee Data
    public function update(Request $request, Employee $employee) {
        $formFields = $request->validate([
            'name' => 'required',
            'department_id' => 'required',
            'dependent_id' => 'required',
            'salary' => 'required',
        ]);

        if($request->hasFile('img')) {
            $formFields['img'] = $request->file('img')->store('imgs', 'public');
        }

        $employee->update($formFields);
        return redirect('/')->with('message', 'Employee updated successfully!');
    }

    // Delete Employee
    public function destroy(Employee $employee) {
        $employee->delete();
        return redirect('/')->with('message', 'Employee deleted successfully');
    }
}
