<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;
use App\Models\Employee;
use App\Models\User;
use Illuminate\Validation\Rule;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;


class CompanyController extends Controller
{
    // Display all companies

    public function index()
    {
        return view('companies.index', [
            'companies' => Company::latest()->filter(request(['search']))->paginate(10)->withQueryString(),
        ]);
    }

    // Display the details for one company

    public function show(Company $company)
    {
        $company->load('employees');
        $employees = $company->employees()->paginate(10);

        return view('companies.show', [
            'company' => $company,
            'employees' => $employees,
        ]);
    }

    // Display a page for creating a company

    public function create()
    {
        return view('companies.create');
    }

    // Store a new company

    public function store()
    {
        $attributes = request()->validate([
            'name' => ['required', Rule::unique('companies', 'name')],
            'email' => ['required', Rule::unique('companies', 'email'), 'email'],
            'logo' => 'required|image|dimensions:min_width=100,min_height=100',
            'website' => ['required', 'url'],
            'summary' => ['required', 'min:10', 'max:255'],
            'description' => 'required',
        ]);

        $slug = Str::slug(request('name'));
        $slugExists = Company::where('slug', $slug)->exists();

        if ($slugExists) {
            return redirect('/admin/companies/create')->with('error', 'Company with similar name already exists. Please choose a different name.')->withInput();
        }

        $attributes['slug'] = $slug;
        $attributes['logo'] = request()->file('logo')->store('images/companies', 'public');

        try {

            Company::create($attributes);
            return redirect('/companies')->with('success', 'Company created successfully!');
        } catch (\Exception $e) {

            return redirect('/admin/companies/create')->with('error', 'Company not created!')->withInput();
        }
    }

    // Display a page for editing company details

    public function edit(Company $company)
    {
        return view('companies.edit', [
            'company' => $company,
        ]);
    }


    // Update company details

    public function update(Request $request, Company $company)
    {
        // Validate incoming data
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => ['required', Rule::unique('companies', 'email')->ignore($company->id), 'email'],
            'website' => ['required', 'url'],
            'description' => ['required', 'min:10'],
        ]);

        // Update the employee's data
        $company->update([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'website' => $validatedData['website'],
            'description' => $validatedData['description'],
        ]);

        // Redirect back to the form page with a success message
        return redirect()->back()->with('success', 'Company details updated successfully!');
    }

    // Update employee image separately to avoid updating the image when updating other employee details

    public function updateImage(Request $request, Company $company)
    {
        $request->validate(['logo' => 'image']);

        // Get the old image path before updating
        $oldImagePath = $company->logo;

        // Store the new image
        $path = $request->file('image')->store('images/companies', 'public');

        // Delete the old image from storage if it exists and is not the new image
        if ($oldImagePath && $oldImagePath !== $path) {
            Storage::disk('public')->delete($oldImagePath);
        }

        // Update the employee record with the new image path
        $company->update(['logo' => $path]);

        // Check if the image was updated and return appropriate response
        if ($company->wasChanged('logo')) {
            return redirect()->back()->with('success', 'Company image updated successfully!');
        } else {
            return redirect()->back()->with('error', 'Company image not updated!');
        }
    }

    // delete employee

    public function destroy(Company $company)
    {
        $company->delete();
        return redirect('/admin/companies')->with('success', 'Company deleted successfully!');
    }

}
