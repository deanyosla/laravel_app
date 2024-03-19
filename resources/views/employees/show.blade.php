<x-layout>
    <main class="max-w-xl mt-6 mx-auto">
        <article class="flex flex-col items-center gap-6">
            <img src="{{ asset('storage/' . $employee->image) }}" alt="" class="rounded-xl w-48">

            <p class="text-gray-400 text-xs">
                Added <time>{{ $employee->created_at->diffForHumans() }}</time>
            </p>

            <h1 class="font-bold text-2xl lg:text-4xl">
                @php
                    $nameParts = explode(' ', $employee->name);
                    echo count($nameParts) > 1 ? ucwords($employee->name) : strtoupper($employee->name);
                @endphp
            </h1>


            <x-link-button :employeeCompany="$employee->company" />


            <div class="text-sm lg:text-md leading-loose border-b border-gray-100 pb-8">
                <div>
                    {{-- Convert the employee description to an array of sentences --}}
                    @php
                        $sentences = preg_split('/\. (?=[A-Z])/', $employee->description);
                        // Remove the last item, remove the period, and add it back
                        $lastSentence = array_pop($sentences);
                        $lastSentence = rtrim($lastSentence, '.');
                        $sentences[] = $lastSentence;
                    @endphp

                    {{-- Iterate through each pair of sentences to create paragraphs --}}
                    @foreach (array_chunk($sentences, 2) as $description)
                        <p class="mb-4">{{ implode('. ', $description) }}.</p>
                    @endforeach
                </div>
            </div>

            <x-testimonials :model="$employee" />


        </article>
    </main>


</x-layout>
