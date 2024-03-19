<main class="w-full max-w-sm md:max-w-xl mt-6 mx-auto flex flex-col md:flex-row">
    <!-- Left Content Section -->
    <article class="flex-1 flex flex-col items-start gap-6 rounded-sm md:pr-8">
        <a href="/admin/{{ isset($employee) ? 'employees' : 'companies' }}"
            class="text-indigo-500 font-semibold py-2 text-sm hover:text-indigo-600">Back to all
            {{ isset($employee) ? 'employees' : 'companies' }}</a>

        <h1 class="text-2xl">Edit {{ isset($employee) ? 'Employee' : 'Company' }}</h1>

        <!-- Image and Edit Button -->
        <img src="{{ asset('storage/' . (isset($employee) ? $employee->image : $company->logo)) }}"
            alt="{{ isset($employee) ? $employee->name : $company->name }}"
            class="mx-auto rounded-xl max-w-48 max-h-48 md:pr-4">

        <div x-data="{ open: {{ old('image') || $errors->has('image') ? 'true' : 'false' }} }">
            <button @click="open = true" class="bg-indigo-500 text-white px-4 py-2 rounded hover:bg-indigo-600 mt-2">Edit
                Image</button>

            <div x-show="open" class="fixed inset-0 flex items-center justify-center z-50"
                style="background-color: rgba(0,0,0,0.5); display:none;">
                <div class="bg-white p-6 rounded-lg flex flex-col gap-8">
                    <form method="POST"
                        action="/admin/{{ isset($employee) ? 'employees' : 'companies' }}/{{ isset($employee) ? $employee->slug : $company->slug }}/image"
                        enctype="multipart/form-data"
                        class="flex flex-col gap-8"
                        >
                        @csrf
                        @method('PATCH')
                        <input type="file" name="image">
                        @error('image')
                            <p class="bg-red-100 border border-red-400 text-red-700">{{ $message }}</p>
                        @enderror
                        <button type="submit"
                            class="bg-indigo-500 text-white px-4 py-2 rounded hover:bg-indigo-600">Update
                            Image</button>
                    </form>
                    <button @click="open = false" class="text-red-500 bg-gray-100 py-2 rounded hover:bg-gray-200">Close</button>
                </div>
            </div>
        </div>
    </article>

    <form method="POST"
        action="/admin/{{ isset($employee) ? 'employees' : 'companies' }}/{{ isset($employee) ? $employee->slug : $company->slug }}"
        class="flex flex-col gap-10 pt-12 md:pt-4 md:pl-8 md:border-l md:border-gray-100 md:w-96">

        @csrf
        @method('PUT')

        <!-- Name Input -->
        <x-form-input type="text" id="name" name="name" placeholder="" :value="isset($employee) ? $employee->name : $company->name" labeltext="Name"
            required="false" />

        <!-- Company Dropdown -->
        @if (isset($employee))
            <div class="relative flex flex-col">
                <label for="company_id" class="absolute bottom-full left-0 font-bold text-xs uppercase ">Company</label>
                <select name="company_id" class="border border-indigo-500 rounded-md px-4 py-2 focus:outline-indigo-500">
                    @foreach ($companies as $company)
                        <option value="{{ $company->id }}"
                            {{ $employee->company_id == $company->id ? 'selected' : '' }}>
                            {{ $company->name }}
                        </option>
                    @endforeach
                </select>
                @error('company_id')
                    <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror
            </div>
        @endif

        <!-- Email Input -->
        <x-form-input type="email" id="email" name="email" placeholder="" :value="isset($employee) ? $employee->email : $company->email" labelText="Email" />

        <!-- Additional fields relevant for employees -->
        @if (isset($employee))
            <!-- Job Title Input -->
            <x-form-input type="text" id="job_title" name="job_title" placeholder="" :value="$employee->job_title"
                labelText="Job Title" />

            <!-- Phone Input -->
            <x-form-input type="tel" id="phone" name="phone" placeholder="" :value="$employee->phone"
                labelText="Phone" />

            <!-- Address Input -->
            <x-form-input type="text" id="address" name="address" placeholder="" :value="$employee->address"
                labelText="Address" />
        @endif

        <!-- Website Input -->
        @if (!isset($employee))
            <x-form-input type="text" id="website" name="website" placeholder="" :value="$company->website"
                labelText="Website" />
        @endif
        <!-- Description Textarea -->
        <x-form-textarea id="description" name="description" placeholder="" :value="isset($employee) ? $employee->description : $company->description" labelText="Description"
            rows="6" />
        <button type="submit" class="mt-4 bg-indigo-500 text-white px-4 py-2 rounded hover:bg-indigo-600">Save
            Changes</button>
    </form>
</main>
