<div id="containerPage">
    <section id="tops">
        <h2 class="heading">Os mais baixados</h2>
        <x-music.music-container :musics="$tops" />
    </section>
    <section id="startHome">
        <h2 class="heading">Ultimos Lançamentos</h2>
        <x-music.music-container :musics="$musics" /> 
    </section>

    <section id="recomend">
        <h2 class="heading">Recomendados para si</h2>
        <x-music.music-container :musics="$recomend" />   
    </section>
</div>
