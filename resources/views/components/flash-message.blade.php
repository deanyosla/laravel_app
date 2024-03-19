<div x-data="{ isOpen: true }" x-init="setTimeout(() => isOpen = false, 10000)" class="fixed bottom-0 right-0 p-4" x-show="isOpen">
    <div class="flex items-center gap-8 py-2 pl-4 {{ isset($success) && $success == 'error' ? "bg-red-100 border border-red-400 text-red-700 rounded" : "bg-indigo-100 border border-indigo-400 text-indigo-700 rounded" }}">
        <h1>{{ $message }}</h1>
        <a href="#" x-on:click.prevent="isOpen = false" class="h-8 w-12 flex justify-center items-center text-xl font-extrabold {{ $success == 'error' ? "hover:text-red-300" : "hover:text-indigo-300" }}">&times;</a>
    </div>
</div>
