<ul id="ul-map">
    <li><a href="{{ route('home')}}" wire:navigate>
        <span class="material-symbols-outlined">
        home
        </span> 
        <span>Home</span> 
    </a></li>

    <li><a href="{{ route('music.music') }}" wire:navigate>
        <span class="material-symbols-outlined">
            play_circle
        </span>
        <span>Músicas</span> 
    </a></li>

    <li><a href="{{ route('music.categores.categores') }}" wire:navigate>
        <span class="material-symbols-outlined">
            lists
            </span>
        <span>Categórias</span> 
    </a></li>

</ul>

