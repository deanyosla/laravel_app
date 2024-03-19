<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;
use App\Models\Employee;
use App\Models\User;
use Illuminate\Validation\Rule;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class EmployeeController extends Controller
{

    // Display all employees
    
    public function index()
    {
        return view('employees.index', [
            'employees' => Employee::latest()->filter(request(['search', 'company', 'user']))->paginate(10)->withQueryString(),
            'companies' => Company::all(),
            'currentCompany' => Company::firstWhere('slug', request('company')),
            'user' => User::first()
        ]);
    }

    // Display the details for one employee

    public function show(Employee $employee)
    {
        return view('employees.show', [
            'employee' => $employee
        ]);
    }

    // Access the page for creating a new employee

    public function create()
    {
        return view('employees.create', [
            'companies' => Company::all()
        ]);
    }

    // Save employee details

    public function store()
    {

        $attributes = request()->validate([
            'name' => 'required',
            'email' => ['required', Rule::unique('employees', 'email'), 'email'],
            'phone' => ['required', 'string', 'max:20', Rule::unique('employees', 'phone')],
            'image' => 'required|image',
            'job_title' => ['required', 'min:3'],
            'address' => ['required', 'min:8'],
            'summary' => ['required', 'min:10', 'max:255'],
            'description' => 'required',
            'company_id' => ['required', Rule::exists('companies', 'id')]
        ]);

        $slug = Str::slug(request('name'));
        $slugExists = Employee::where('slug', $slug)->exists();

        if ($slugExists) {
            return redirect('/admin/employees/create')->with('error', 'Employee with similar name already exists. Please choose a different name.')->withInput();
        }

        $attributes['slug'] = $slug;
        $attributes['user_id'] = auth()->id();
        $attributes['image'] = request()->file('image')->store('images/employees', 'public');

        try {
            Employee::create($attributes);
            return redirect('/employees')->with('success', 'Employee created successfully!');
        } catch (\Exception $e) {
            return redirect('/admin/employees/create')->with('error', 'Employee not created!')->withInput();
        }
    }

    public function edit(Employee $employee)
    {
        return view('employees.edit', [
            'employee' => $employee,
            'companies' => Company::all()
        ]);
    }

    // Update employee details

    public function update(Request $request, Employee $employee)
    {
        // Validate incoming data
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => ['required', Rule::unique('employees', 'email')->ignore($employee->id), 'email'],
            'phone' => ['required', 'string', 'max:20', Rule::unique('employees', 'phone')->ignore($employee->id)],
            'job_title' => ['required', 'min:3'],
            'address' => ['required', 'min:8'],
            'description' => 'required',
            'company_id' => ['required', Rule::exists('companies', 'id')]
        ]);

        // Update the employee's data
        $employee->update([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'company_id' => $validatedData['company_id'],
            'job_title' => $validatedData['job_title'],
            'phone' => $validatedData['phone'],
            'address' => $validatedData['address'],
            'description' => $validatedData['description'],
        ]);

        // Redirect back to the form page with a success message
        return redirect()->back()->with('success', 'Employee details updated successfully!');
    }

    // Update employee image separately to avoid updating the image when updating other employee details

    public function updateImage(Request $request, Employee $employee)
    {
        $request->validate(['image' => 'image']);

        // Get the old image path before updating
        $oldImagePath = $employee->image;

        // Store the new image
        $path = $request->file('image')->store('images/employees', 'public');

        // Delete the old image from storage if it exists and is not the new image
        if ($oldImagePath && $oldImagePath !== $path) {
            Storage::disk('public')->delete($oldImagePath);
        }

        // Update the employee record with the new image path
        $employee->update(['image' => $path]);

        // Check if the image was updated and return appropriate response
        if ($employee->wasChanged('image')) {
            return redirect()->back()->with('success', 'Employee image updated successfully!');
        } else {
            return redirect()->back()->with('error', 'Employee image not updated!');
        }
    }

    // delete employee

    public function destroy(Employee $employee)
    {
        $employee->delete();
        return redirect('/admin/employees')->with('success', 'Employee deleted successfully!');
    }
}
