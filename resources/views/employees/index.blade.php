@props(['employees', 'companies', 'currentCompany', 'user'])

<x-layout>

    @auth
        <div class="w-full flex flex-col items-center lg:flex-row lg:items-start lg:gap-8">

            <x-header :companies="$companies" :currentCompany="isset($currentCompany) ? $currentCompany : null" for="employees"></x-header>

            <main class="flex flex-col w-full items-center pb-8">

                <div class="flex items-center justify-between w-full max-w-2xl">
                    <div class="flex flex-col py-6">
                        <h1 class="text-2xl px-4">
                            All <span
                                class="text-indigo-500">{{ $currentCompany ? ucwords($currentCompany->name) : '' }}</span>
                            Employees
                        </h1>

                        <p class="pt-2 px-4 text-xs">Select an employee to
                            {{ request()->is('admin/employees') ? 'edit' : 'view' }} their profile.</p>
                    </div>
                    @auth
                        @if (auth()->user()->is_admin == 1)
                            <a href="/admin/employees/create"
                                class="py-1 px-3 bg-indigo-500 h-fit w-fit rounded-md text-sm text-white hover:bg-indigo-600 hover:text-indigo-300">Add</a>
                        @endif
                    @endauth

                </div>

                @if (isset($employees) ? $employees->count() : null)
                    <x-index-grid :employees="$employees" for="employees"></x-index-grid>

                        {{ $employees->links() }}
                        <div class="h-12 w-full"></div> {{-- Spacer --}}
                    @else
                        <p class="text-center mt-24">No employees yet. Please check back later.</p>
                @endif

            </main>


        </div>

    @endauth



</x-layout>
