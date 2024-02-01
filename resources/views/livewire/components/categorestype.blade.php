<ul class="categores">
    @foreach (\App\Enums\CategoresType::cases() as $category)
        <li><a href=" {{ route('music.categores.category', $category->value)}} " wire:navigate>
            <span @class(['p-4', $category->covers(), ]) ></span>
            <span>{{$category->value}}</span>  
        </a></li>
    @endforeach
</ul>