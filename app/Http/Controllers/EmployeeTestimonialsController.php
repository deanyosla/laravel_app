<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;


class EmployeeTestimonialsController extends Controller
{
    public function store (Employee $employee)
    {   
        request()->validate([
            'body' => 'required'
        ]);


        $employee->testimonials()->create([
            'user_id' => auth()->id(),
            'body' => request('body')
        ]);

        return back();


    }
}
