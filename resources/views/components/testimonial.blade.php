<article class="flex gap-4 border border-gray-200 bg-gray-100 rounded-xl p-6">
                            
    <img src="https://i.pravatar.cc/100?id={{ $testimonial->user->id }}" alt="avatar" class="h-8 rounded-xl">
    
    <main class="flex flex-col">
        
        <div class="py-3">
            <h4 class="font-bold">{{ $testimonial->user->username }}</h4>
            <p class="text-xs">Posted <time>{{ $testimonial->created_at->diffForHumans() }}</p>
        </div>

        <p>{{ $testimonial->body }}</p>

    </main>

</article>
