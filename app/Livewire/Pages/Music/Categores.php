<?php

namespace App\Livewire\Pages\Music;

use App\Models\Music;
use Livewire\Component;
use Illuminate\Support\Str;
class Categores extends Component
{

    public $category;
    public $categoryType;

    public function mount($category, Music $music){
        $this->category = $music->all()->where('category', $category);
        $this->categoryType = Str::ucfirst(urldecode($category));

    }

   
    public function render()
    {
        return view('livewire.pages.music.categores')->layout('layouts.layout',
            ['title' => 'Categoria:' . ' ' . $this->categoryType]
        );
    }
}
