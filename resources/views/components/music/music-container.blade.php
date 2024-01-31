@props(['musics'])
<div id="music-container">
    @foreach ($musics as $music)
        <x-music.card :music="$music" />   
    @endforeach
</div>    