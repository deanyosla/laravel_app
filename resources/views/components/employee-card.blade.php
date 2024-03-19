@props(['employee'])

<article
    {{ $attributes->merge(['class' => 'transition-colors duration-300 hover:bg-gray-100 border border-black border-opacity-0 hover:border-opacity-5 rounded-xl']) }}>
    <div class="py-6 px-5">
        <div>
            <img src="/images/illustration-1.png" alt="Blog Post illustration" class="rounded-xl">
        </div>

        <div class="flex flex-col py-4 gap-4">
            <header>
                <div class="flex flex-col gap-2">
                    <div class="flex flex-col gap-2">
                        <h1 class="text-3xl cursor-pointer">
                            {{ $employee->name }}
                        </h1>
                        <div>
                            <x-company-button :company="$employee->company" />
                        </div>
                    </div>

                    <span class="mt-2 block text-gray-400 text-xs">
                        Added <time>{{ $employee->created_at->diffForHumans() }}</time>
                    </span>

                </div>
            </header>

            <div class="text-sm">
                <p>
                    {{--  If the current page url looks like /companies/*** then display the company description, else display the company summary  --}}
                    @if (request()->is('employees/*'))
                        {{ $employee->description }}
                    @else
                        {{ $employee->summary }}
                    @endif
                </p>
            </div>

            <footer class="self-center flex justify-between items-center mt-4">
                <div>
                    <a href="/employees/{{ $employee->slug }}">
                        <div
                            class="flex gap-1 text-xs font-semibold border border-indigo-500 text-indigo-500 rounded-full py-2 px-8">
                            <p>Read</p>
                            <p>More</p>
                        </div>
                    </a>
                </div>
            </footer>
        </div>
    </div>
</article>
