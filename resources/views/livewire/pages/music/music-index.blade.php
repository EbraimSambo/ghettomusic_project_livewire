<div id="containerPage">
    <section id="all">
        <h2 class="heading">Todas as Musicas</h2>
        <x-music.music-container :musics="$all" />   
    </section>
    
    <section id="tops">
        <h2 class="heading">Os mais baixados</h2>
        <x-music.music-container :musics="$tops" />
    </section>

    <section id="new">
        <h2 class="heading">Ultimos Lançamentos</h2>
        <x-music.music-container :musics="$new" /> 
    </section>

</div>