<section id="singlePage">
    <div class="container">
        <div class="cover">
            <img src="{{ asset('storage/'.$music->cover_path) }}" alt="">
        </div>
        <div class="desc">
            <livewire:components.download :music="$music">
            <x-music.legend :legend="$music" />
        </div>
    </div>

    <div class="containerOuthers">
        
        @if (count($author) == 1)
        @else
            <div class="similars">
                <h2 class="heading">Músicas de <span class="relce">{{$music->artist}}</span> </h2>
                <x-music.music-container :musics="$author" />
            </div>         
        @endif

        @if(!empty($tops) and !is_null($tops) and !count($tops) == 0)
            <div class="similars">
                <h2 class="heading">Músicas mais baixada de <span class="relce">{{$music->artist}}</span> </h2>
                <x-music.music-container :musics="$tops" />
            </div>             
        @endif
  
        <div class="similars">
            <h2 class="heading">Similares a <span class="relce">{{$music->title}}</span> </h2>
            <x-music.music-container :musics="$similars" />
        </div>       
    </div>

</section>
