

<x-dropdown :companies="$companies" :currentCompany="isset($currentCompany) ? $currentCompany : null" menuWidth="100%">

    <x-slot name="trigger">
        <button
            class="pl-3 py-2 pr-2 w-full flex justify-between text-indigo-500 hover:text-indigo-600">{{ isset($currentCompany) ? ucwords($currentCompany->name) : 'Filter by company' }}

            <x-down-arrow class="pointer-events-none"></x-down-arrow>

        </button>
    </x-slot>


    <x-dropdown-item href="/employees{{ http_build_query(request()->except('company', 'page')) }}" class="{{ isset($currentCompany) ? '' : 'bg-indigo-500 text-white' }}">All
        Companies</x-dropdown-item>

    @foreach ($companies as $company)
        <x-dropdown-item href="/employees?company={{ $company->slug }}&{{ http_build_query(request()->except('company', 'page')) }}" :active="isset($currentCompany) && $currentCompany->is($company)">{{ ucwords($company->name) }}
        </x-dropdown-item>
    @endforeach
</x-dropdown>
