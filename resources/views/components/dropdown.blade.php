@props(['trigger', 'menuWidth' => 'auto'])

<div x-data="{ show: false }" @click.away="show = false" class="w-full relative">
    
    {{-- Trigger --}}
    <div @click=" show = ! show " class="w-full text-start text-sm font-semibold">
        {{ $trigger }}
    </div>

    {{-- Links --}}
    <div x-show="show" 
         class="absolute top-full pt-2 z-10" 
         :style="'width:' + '{{ $menuWidth }}'"
         style="display: none;">
         <div class="bg-gray-100 p-2 rounded-md">
        {{ $slot }}
         </div>
    </div>
</div>
