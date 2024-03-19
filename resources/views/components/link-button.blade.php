{{-- if on admin pages the button submits a delete request for that employee --}}

@if (isset($employee) && request()->is('admin/employees'))
    <form id="deleteForm" method="POST" action="/admin/employees/{{ $employee->slug }}">
        @csrf
        <input type="hidden" name="_method" value="DELETE">
        <button type="button" onclick="confirmDelete()"
            class="w-fit px-3 py-1 border border-indigo-300 rounded-full text-indigo-300 text-xs uppercase font-semibold hover:text-indigo-600 hover:border-indigo-600">
            Delete
        </button>
    </form>

    {{-- Add a confirmation modal that allows the user to confirm that they want to delete the employee --}}

    <div id="confirmModal" class="fixed top-0 left-0 w-full h-full bg-black bg-opacity-50 z-50 hidden">
        <div class="relative w-72 mx-auto mt-32 p-6 bg-white shadow-lg">
            <p class="mb-4">Are you sure you want to delete this employee?</p>
            <div class="flex justify-end space-x-4">
                <button onclick="document.getElementById('deleteForm').submit();" class="bg-red-500 text-white px-3 py-1 rounded hover:bg-red-600">Yes, Delete</button>
                <button onclick="closeModal()" class="bg-gray-300 px-3 py-1 rounded hover:bg-gray-400">Cancel</button>
            </div>
        </div>
    </div>

    @elseif (isset($company) && request()->is('admin/companies'))

    <form id="deleteForm" method="POST" action="/admin/companies/{{ $company->slug }}">
        @csrf
        <input type="hidden" name="_method" value="DELETE">
        <button type="button" onclick="confirmDelete()"
            class="w-fit px-3 py-1 border border-indigo-300 rounded-full text-indigo-300 text-xs uppercase font-semibold hover:text-indigo-600 hover:border-indigo-600">
            Delete
        </button>
    </form>

    {{-- Add a confirmation modal that allows the user to confirm that they want to delete the employee --}}

    <div id="confirmModal" class="fixed top-0 left-0 w-full h-full bg-black bg-opacity-50 z-50 hidden">
        <div class="relative w-72 mx-auto mt-32 p-6 bg-white shadow-lg">
            <p class="mb-4">Are you sure you want to delete this employee?</p>
            <div class="flex justify-end space-x-4">
                <button onclick="document.getElementById('deleteForm').submit();" class="bg-red-500 text-white px-3 py-1 rounded hover:bg-red-600">Yes, Delete</button>
                <button onclick="closeModal()" class="bg-gray-300 px-3 py-1 rounded hover:bg-gray-400">Cancel</button>
            </div>
        </div>
    </div>




    {{-- If on the employee index page and NO company has been selected, display the company link button --}}
@elseif (isset($employeeCompany) && request()->is('employees*') && !request()->has('company'))
    @props(['employeeCompany'])

    <a href="/companies/{{ $employeeCompany->slug }}"
        class="w-fit px-3 py-1 border border-indigo-300 rounded-full text-indigo-300 text-xs uppercase font-semibold hover:text-indigo-600 hover:border-indigo-600">
        {{ $employeeCompany->name }}
    </a>

    {{-- If on the employee index page and a company has been selected, display nothing --}}
@elseif (isset($employeeCompany) && request()->is('employees*') && request()->has('company'))
    {{-- do nothing --}}
@else
    @props(['company'])

    @if (!is_null($company))
    <a href="{{ $company->website }}" target="_blank"
        class="w-fit px-3 py-1 border border-indigo-300 rounded-full text-indigo-300 text-xs font-semibold hover:text-indigo-600 hover:border-indigo-600">
        Website
    </a>
    @endif
@endif
