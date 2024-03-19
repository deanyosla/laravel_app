@props(['required' => false, 'value' => '', 'name', 'labelText', 'rows' => 3])

<div class="relative">
    <label class="absolute bottom-full left-0 block uppercase font-bold text-xs text-gray-700" for="{{ $name }}">
        {{ ucfirst($labelText) }}<span class="text-red-500">{{ $required ? ' *' : '' }}</span>
    </label>

    <textarea
        class="border border-indigo-500 rounded-md p-2 w-full focus:outline-indigo-500"
        type="text"
        id="{{ $name }}"
        name="{{ $name }}"
        placeholder="{{ $placeholder ?? 'Enter ' . $labelText . ' text' }}"
        rows="{{ $rows }}"
        {{ $required ? 'required' : '' }}
        {{ $attributes }}
    >{{ $value }}</textarea>

    @error($name)
        <p class="absolute top-full text-red-500 text-xs mt-2">{{ $message }}</p>
    @enderror
</div>
