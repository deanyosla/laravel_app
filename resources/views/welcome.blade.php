<x-layout>

        <main class="flex flex-1 flex-col items-center justify-center w-full">
            <div class="space-y-6 py-20">
                <div class="flex flex-col gap-2 items-center">
                    <p class="font-bold text-4xl">{{ auth()->check() ? "Start your" : "Welcome to" }}</p>
                    <p class="font-bold text-6xl">Company Dashboard</p>
                </div>

                <div>
                    <p class="text-center">
                        @if(auth()->check())
                            Browse our collection of <a href="/employees" class="font-bold text-indigo-500 hover:text-indigo-600 hover:underline decoration-2 underline-offset-8">employees</a> or <a href="/companies" class="font-bold text-indigo-500 hover:text-indigo-600 hover:underline decoration-2 underline-offset-8">companies</a>
                        @else
                            Please <a href="/register" class="font-bold text-indigo-500 hover:text-indigo-600 hover:underline decoration-2 underline-offset-8">register</a> or <a href="/login" class="font-bold text-indigo-500 hover:text-indigo-600 hover:underline decoration-2 underline-offset-8">login</a> to start browsing Company Dashboard!
                        @endif
                    </p>

                </div>
            </div>
        </main>

</x-layout>
