@props(['legend'])
<div class="description">
    <h1>{{ $legend->title }}</h1>
    <h2>Artista: <span>{{$legend->artist}}</span>  </h2>
    <span> Criado {{ $legend->created_at->diffForHumans() }} </span>
    <p>{{ $legend->description }}</p>
</div>