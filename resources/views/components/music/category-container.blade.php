<ul class="category-container">
    @foreach (\App\Enums\CategoresType::cases() as $category)
        <li>
            <a href="{{ route('music.categores.category', $category->value)}}" wire:navigate>
                <img src="{{ asset('assets/' .$category->typeIndex()['cover'] ) }}" alt="">
                <h2>{{$category->typeIndex()['title'] }}</h2>
           </a>
        </li>
    @endforeach
</ul>