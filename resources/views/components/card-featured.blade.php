@props(['data', 'item', 'context' => ''])

@php
    $isEmployee = $item instanceof \App\Models\Employee;
    $isAdmin = Str::startsWith($context, 'admin');

    if ($isAdmin) {
        $url = "/admin/" . $data . "/{$item->slug}/edit";
    } else {
        $url = "/{$data}/{$item->slug}";
    } 
@endphp


<article class="w-full flex justify-center">
    <div class="relative w-full max-w-2xl">
        <a href="{{ $url }}">

            <h1 class="text-md font-semibold transition-colors duration-300 border border-gray-100 hover:bg-gray-100 rounded-md p-3">
                {{ $item->name }}
            </h1>

        </a>

        <h2 class="absolute top-3 right-4 flex justify-center md:w-32">
            @if($isEmployee && $isAdmin)
                <x-link-button :employee="$item"/>
            @elseif($isEmployee)
                <x-link-button :employeeCompany="$item->company" :employee="$item" :company="$item->company"/>
            @else
                <x-link-button :company="$item"/>
            @endif
        </h2>
    </div>
</article>
