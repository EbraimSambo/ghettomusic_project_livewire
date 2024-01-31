@props(['music'])
<div id="music-container">
    @foreach ($musics as $music)
        <article class="card">
            <a href="{{ route('music.single', $music->slug) }}" wire:navigate>
                <picture class="cover">
                    <img src="{{ asset('storage/'.$music->cover_path) }}" alt="{{ $music->title }}">
                </picture>
                <div class="legend">
                    <h3>{{ $music->title }}</h3>
                </div>
            </a>
        </article>     
    @endforeach
</div>        



