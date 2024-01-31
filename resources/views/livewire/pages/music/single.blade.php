<section id="singlePage">
    <div class="container">
        <div class="cover">
            <img src="{{ asset('storage/'.$music->cover_path) }}" alt="">
        </div>
        <div class="desc">
            <div class="counter">
                <span> 
                    <i class="bi-download"></i>
                    Downloads: 
                    {{ $music->download }}
                </span>

                <span> 
                    <i class="bi-star"></i>
                    Likes: 
                    {{ $music->download }}
                </span>

            </div>
            <livewire:components.download :music="$music">
            <div class="description">
                <h1>{{ $music->title }}</h1>
                <p>{{ $music->description }}</p>
            </div>
        </div>
    </div>
</section>
