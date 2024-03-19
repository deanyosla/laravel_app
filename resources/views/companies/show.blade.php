<x-layout>
    <main class="max-w-xl mt-6 mx-auto">
        <article class="flex flex-col items-center gap-12">

            <section class="w-full flex flex-col items-center gap-4">
                <img src="{{ asset('storage/' . $company->logo) }}" alt="" class="rounded-l w-48">

                <p class="text-gray-400 text-xs">
                    Added <time>{{ $company->created_at->diffForHumans() }}</time>
                </p>

                <h1 class="font-bold text-xl lg:text-2xl">
                    @php
                        $nameParts = explode(' ', $company->name);
                        echo count($nameParts) > 1 ? ucwords($company->name) : strtoupper($company->name);
                    @endphp
                </h1>


                <x-link-button :company="$company" />


                <div class="text-sm lg:text-md leading-loose border-b border-gray-100 pb-8">
                    <div>
                        {{-- Convert the company description to an array of sentences --}}
                        @php
                            $sentences = preg_split('/\. (?=[A-Z])/', $company->description);
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
            </section>


            <section class="flex flex-col gap-8 w-full">
                <h2 class="text-lg font-bold">Recent Employees</h2>

                @if ($employees->count())
                    <x-index-grid :employees="$employees" for="employees"></x-index-grid>

                    {{ $employees->links() }}
                @else
                    <p class="text-center mt-24">No employees yet. Please check back later.</p>
                @endif

            </section>
            {{-- This component is already dynamic and ready to accept a model called $company --}}
            {{-- <x-testimonials :model="$company" /> --}}

        </article>
    </main>


</x-layout>
