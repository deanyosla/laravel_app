@props([
    'type' => 'text',
    'id' => '',
    'name' => '',
    'placeholder' => '',
    'value' => '',
    'labelText' => null,
    'required' => false,
])

<div class="relative">
    <label for="{{ $id }}"
        class="absolute bottom-full left-0 uppercase font-bold text-xs text-gray-700">{{ ucwords($labelText ?? str_replace('_', ' ', $name)) }}
        <span class="text-red-500">{{ $required == 'true' ? '*' : '' }} </span></label>

    <input type="{{ $type }}" id="{{ $id }}" name="{{ $name }}" placeholder="{{ $placeholder }}"
        value="{{ $type !== 'password' ? (old($name) ?: $value) : '' }}" {{ $required ? 'required' : '' }}
        class="flex-1 px-4 py-2 rounded-md border border-indigo-500 focus:outline-indigo-500 w-full" />


    @if (!request()->is('login'))
        @error($name)
            <p class="absolute top-full text-red-500 text-xs mt-1">{{ $message }}</p>
        @enderror
    @endif
</div>
