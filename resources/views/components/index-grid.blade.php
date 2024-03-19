@php
    $dataSources = [
        'employees' => $employees ?? null,
        'companies' => $companies ?? null,
        // Add more sources here as needed in the future
    ];
@endphp

@if(isset($dataSources[$for]) && $dataSources[$for] && $dataSources[$for]->count() > 0)
    <div class="flex flex-col gap-4 w-full">
        @foreach($dataSources[$for] as $item)
            <x-card-featured :data="$for" :item="$item" context="{{ request()->is('admin/*') ? 'admin' : 'general' }}" />
        @endforeach
    </div>
@endif
