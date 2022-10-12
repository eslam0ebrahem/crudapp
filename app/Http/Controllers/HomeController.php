<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Dependent;
use App\Models\Employee;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    // Show Home Page
    public function index() {
        return view('index', [
            'employees' => Employee::count(),
            'dependents' => Dependent::count(),
            'departments' => Department::count(),
        ]);
    }

 
}
