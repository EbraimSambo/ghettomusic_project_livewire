<ul class="categores">
    @foreach (\App\Enums\CategoresType::cases() as $category)
        <li><a href=" {{ route('categores', $category->value)}} " wire:navigate>
            <span @class(['p-4', $category->covers(), ]) ></span>
            <span>{{$category->value}}</span>  
        </a></li>
    @endforeach
        {{-- <li><a href="/#tops" wire:navigate>
            <span class="material-symbols-outlined">
                system_update_alt
            </span>
            <span>Os mais baixados</span>
        </a></li>
        <li><a href="/#recomend" >
            <span class="material-symbols-outlined">
                calendar_month
            </span>
            <span>Recomendados</span>
        </a></li> --}}
</ul>