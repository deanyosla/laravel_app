@if (method_exists($model, 'testimonials'))


    <div class="w-full pt-8">
        <header>
            <h3 class="font-bold text-xl pb-4">Testimonials</h3>
        </header>

        <main class="space-y-4">
            @php
                $modelName = strtolower(class_basename($model)); // returns either "employee" or "company"
                $url = "/{$modelName}s/{$model->slug}/testimonials";
            @endphp

            @auth
                <form method="POST" action="{{ $url }}"
                    class="border border-gray-200 rounded-xl flex flex-col p-6 gap-4">
                    @csrf

                    <img src="https://i.pravatar.cc/100?id={{ auth()->user()->id }}" alt="avatar"
                        class="h-12 w-12 rounded-xl">

                    <div class="w-full flex flex-col gap-4 md:space-x-3">
                        <div class="flex-grow">
                            <label for="body" class="sr-only">Enter Your Testimonial Here</label>
                            <textarea id="body" name="body" rows="4"
                                class="w-full h-full border border-gray-200 rounded-xl placeholder-gray-900 px-4 py-2"
                                placeholder="Add a testimonial about {{ $model->name }}..." required></textarea>

                            @error('body')
                                <span class="text-red-500 text-xs">{{ $message }}</span>
                            @enderror

                        </div>

                        <button type="submit"
                            class="h-8 bg-indigo-500 hover:bg-indigo-600 rounded-xl shadow-md text-white px-10 md:w-fit md:self-end">Post</button>
                    </div>
                </form>
            @else
                <p class="font-semibold">
                    <a href="/register" class="hover:underline text-indigo-500 font-bold">Register</a> or
                    <a href="/login" class="hover:underline text-indigo-500 font-bold">Log in</a> to leave a testimonial.
                </p>
            @endauth

            @if ($model->testimonials->count() > 0)
                @foreach ($model->testimonials as $testimonial)
                    <x-testimonial :testimonial="$testimonial" />
                @endforeach
            @endif



        </main>
    </div>


@endif
