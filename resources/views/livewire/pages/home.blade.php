<div id="containerPage">
    <section id="recomend">
        <h2 class="heading">Recomendados para si</h2>
        <x-music.music-container :musics="$recomend" />   
    </section>

    <section id="categores">
        <h2 class="heading">Categorias</h2>
        <x-music.category-container />   
    </section>

    <section id="tops">
        <h2 class="heading">Os mais baixados</h2>
        <x-music.music-container :musics="$tops" />
    </section>

    <section id="startHome">
        <h2 class="heading">Ultimos Lançamentos</h2>
        <x-music.music-container :musics="$musics" /> 
    </section>
</div>
