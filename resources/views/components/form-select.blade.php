@props(['name', 'labelText', 'options', 'optionKey', 'optionValue', 'selectedValue' => null, 'required' => false])

<div class="relative">
    <label class="block mb-1 uppercase font-bold text-xs text-gray-700" for="{{ $name }}">
        {{ ucfirst($labelText) }}<span class="text-red-500">{{ $required ? ' *' : '' }}</span>
    </label>

    <select
        name="{{ $name }}"
        id="{{ $name }}"
        class="border border-indigo-500 rounded-sm p-2 w-full focus:outline-indigo-500"
        {{ $required ? 'required' : '' }}
        {{ $attributes }}
    >
        <option value="">Select {{ $labelText }}</option>
        @foreach ($options as $option)
            <option value="{{ $option[$optionKey] }}"
                {{ $selectedValue == $option[$optionKey] ? 'selected' : '' }}>
                {{ ucwords($option[$optionValue]) }}
            </option>
        @endforeach
    </select>

    @error($name)
        <p class="absolute top-full text-red-500 text-xs mt-2">{{ $message }}</p>
    @enderror
</div>
