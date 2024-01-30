<ul class="categores">
    @foreach (\App\Enums\CategoresType::cases() as $category)
        <li><a href=" {{$category->value}} ">
            <span @class(['p-4', $category->covers(), ]) ></span>
            <span>{{$category->value}}</span>  
        </a></li>
    @endforeach
</ul>