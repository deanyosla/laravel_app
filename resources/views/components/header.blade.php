<header class="w-full mt-4 text-center lg:w-fit lg:flex lg:flex-col lg:gap-8">

    <div class="flex flex-col items-center gap-4 pb-8 border-b border-gray-100 w-full">

        <!-- Search -->
        <p class="text-lg">Search</p>

        <div class="flex flex-col gap-4 border-b border-gray-100 max-w-lg w-full">
            <form method="GET" action="/{{ request()->path() }}" class="flex flex-1 rounded-md">


                @if (request('company'))
                    <input type="hidden" name="company" value="{{ request('company') }}">
                @endif

                <input type="text" name="search"
                    placeholder="Find {{ request()->is('companies*') || request()->is('admin/companies')
                        ? 'a company'
                        : (request()->is('employees') || request()->is('admin/employees')
                            ? 'an employee'
                            : '') }}"
                    class="flex-1 rounded-tl-md rounded-bl-md border border-indigo-500 bg-transparent placeholder-indigo-500 font-semibold text-sm px-3 py-2 focus:outline-indigo-500"
                    value="{{ request('search') }}" />



                <button type="submit"
                    class="bg-indigo-500 p-2 rounded-tr-md rounded-br-md fill-white hover:bg-indigo-600 hover:fill-blue-200">
                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                        viewBox="0 0 32 32">
                        <title>search</title>
                        <path
                            d="M31.008 27.231l-7.58-6.447c-0.784-0.705-1.622-1.029-2.299-0.998 1.789-2.096 2.87-4.815 2.87-7.787 0-6.627-5.373-12-12-12s-12 5.373-12 12 5.373 12 12 12c2.972 0 5.691-1.081 7.787-2.87-0.031 0.677 0.293 1.515 0.998 2.299l6.447 7.58c1.104 1.226 2.907 1.33 4.007 0.23s0.997-2.903-0.23-4.007zM12 20c-4.418 0-8-3.582-8-8s3.582-8 8-8 8 3.582 8 8-3.582 8-8 8z">
                        </path>
                    </svg>
                </button>

            </form>

            <!-- Company Dropdown -->
            @if ($for == 'employees')
                <div class="relative bg-gray-100 border border-gray-200 rounded-md">
                    <x-company-dropdown :currentCompany="isset($currentCompany) ? $currentCompany : null" width="w-full" />
                </div>
            @endif

        </div>

    </div>


    @if (isset($currentCompany))
        <div class="flex justify-center">
            <img src="{{ asset('storage/' . ($currentCompany ? $currentCompany->logo : '')) }}" alt="Company Logo" class="max-h-24 mt-8">
        </div>
    @endif

    @if (isset($currentCompany))
        <div class="flex justify-center text-xs leading-relaxed mt-4 pb-8">
            <p class="max-w-md pb-8 border-b border-gray-100">
                {{ $currentCompany->summary }}
            </p>
        </div>
    @endif

</header>
