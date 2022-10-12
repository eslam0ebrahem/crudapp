<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Employee;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    // Show all departments
    public function index() {
        return view('departments/index', [
            'departments' => Department::all()
        ]);
    }

    //Show single departments
    public function show(Department $department) {
        return view('departments/show', [
            'department' => $department,
            'members' => Employee::where('department_id', '=', $department->id)->get()->count()
        ]);
    }

    // Show Create Form
    public function create() {
        return view('departments/create', [
            'department' => "department",
        ]);    }

    // Store Department Data
    public function store(Request $request) {
        $formFields = $request->validate([
            'name' => 'required',
        ]);
        Department::create($formFields);

        return redirect('/')->with('message', 'Department created successfully!');
    }

    // Show Edit Form
    public function edit(Department $department) {
        return view('departments/edit', [
            'department' => $department,
    ]);
    }

    // Update Department Data
    public function update(Request $request, Department $department) {
        $formFields = $request->validate([
            'name' => 'required',
        ]);

        $department->update($formFields);
        return redirect('/')->with('message', 'Employee updated successfully!');
    }

    // Delete Employee
    public function destroy(Department $department) {
        $department->delete();
        return redirect('/')->with('message', 'Employee deleted successfully');
    }
}
