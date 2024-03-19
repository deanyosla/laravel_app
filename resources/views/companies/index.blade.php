@props(['companies'])

<x-layout>

    @auth
        <div class="w-full flex flex-col items-center lg:flex-row lg:items-start lg:gap-8">

            <x-header :companies="$companies" for="companies"></x-header>

            <main class="flex flex-col w-full items-center pb-8">

                <div class="flex items-center justify-between w-full max-w-2xl">
                    <div class="flex flex-col py-4">
                        <h1 class="text-2xl">
                            @if(request('search'))
                                All companies matching "{{ request('search') }}"
                            @else
                                All Companies
                            @endif
                        </h1>

                        <p class="pt-2 text-xs">Select a company to {{ request()->is('admin/companies') ? 'edit their details.' : 'view their employees.'}}</p>
                    </div>
                    @auth
                        @if (auth()->user()->is_admin == 1)
                            <a href="/admin/companies/create"
                                class="py-1 px-3 bg-indigo-500 h-fit w-fit rounded-md text-sm text-white hover:bg-indigo-600 hover:text-indigo-300">Add</a>
                        @endif
                    @endauth

                </div>

                @if (isset($companies) ? $companies->count() : null)
                    <x-index-grid :companies="$companies" for="companies"></x-index-grid>

                    {{ $companies->links() }}
                    <div class="h-12 w-full"></div> {{-- Spacer --}}
                @else
                    <p class="text-center">No companies yet. Please check back later.</p>
                @endif


            </main>


        </div>

    @endauth



</x-layout>
