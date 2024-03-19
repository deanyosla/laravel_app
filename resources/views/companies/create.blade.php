<x-layout>
    <section class="px-6 py-8 w-full max-w-lg mx-auto">
        <h1 class="pb-8 font-bold text-xl">Add a company</h1>
        <form method="POST" action="/admin/companies" class="max-w-lg w-full mx-auto" enctype="multipart/form-data">

            @csrf

            <div class="flex flex-col gap-10">
                <x-form-input type="text" id="name" name="name" placeholder="" :value="old('name')"
                    labeltext="Name" required="true" />
                <x-form-input type="text" id="email" name="email" placeholder="" :value="old('email')"
                    labeltext="Email" required="true" />
                <x-form-input type="file" id="logo" name="logo" placeholder="" :value="old('logo')"
                    labeltext="Logo" required="true" />
                <x-form-input type="text" id="website" name="website" placeholder="" :value="old('website')"
                    labeltext="Website" required="true" />

                <x-form-textarea name="summary" labelText="Summary" :value="old('summary')" :required="true" />

                <x-form-textarea name="description" labelText="Description" :value="old('description')" :required="true"
                    rows="5" />


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
