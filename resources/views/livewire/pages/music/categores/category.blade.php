<div id="containerPage">
    
    @if (!empty($category) and !is_null($category) and !count($category) == 0)
        <section id="startHome">
            <h1 class="heading">Categoria: {{$categoryType}} </h1>
            <x-music.music-container :musics="$category" />              
        </section>         
    @else
       <section id="notfound">
        <h1 class="heading">Categoria: {{$categoryType}} </h1>
        <p>Não encontramos musicas relacionados está categoria, <br>
           tente proucura por estas categorias a baixo</p>
        <x-music.category-container />   
       </section>
    @endif

</div>