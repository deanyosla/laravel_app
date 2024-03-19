<x-layout>
    <section class="px-6 py-8 w-full max-w-lg mx-auto">
        <h1 class="pb-8 font-bold text-xl">Add an employee</h1>
        <form method="POST" action="/admin/employees" class="max-w-lg w-full mx-auto" enctype="multipart/form-data">

            @csrf

            <div class="flex flex-col gap-10">
                <x-form-input type="text" id="name" name="name" placeholder="" :value="old('name')"
                    labeltext="Name" required="true" />

                <x-form-input type="text" id="email" name="email" placeholder="" :value="old('email')"
                    labeltext="Email" required="true" />

                <x-form-input type="text" id="phone" name="phone" placeholder="" :value="old('phone')"
                    labeltext="Phone" required="true" />

                <x-form-input type="file" id="image" name="image" placeholder="" :value="old('image')"
                    labeltext="Image" required="true" />

                <x-form-input type="text" id="job_title" name="job_title" placeholder="" :value="old('job_title')"
                    labeltext="Job Title" required="true" />

                <x-form-input type="text" id="address" name="address" placeholder="" :value="old('address')"
                    labeltext="address" required="true" />

                <x-form-textarea name="summary" labelText="Summary" :value="old('summary')" :required="true" />

                <x-form-textarea name="description" labelText="Description" :value="old('description')" :required="true"
                    rows="5" />

                <x-form-select name="company_id" labelText="Company" :options="$companies" optionKey="id"
                    optionValue="name" :selectedValue="old('company_id')" :required="true" />

                @if (session('error'))
                    <x-flash-message success="error" message="{{ session('error') }}" />
                @endif

                <button type="submit"
                    class=" mt-8 bg-indigo-500 text-white rounded py-2 px-4 hover:text-indigo-300 transition duration-150 ease-in-out">
                    Submit
                </button>

            </div>



        </form>

    </section>
</x-layout>
