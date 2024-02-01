<?php

namespace App\Livewire\Pages\Music\Categores;

use App\Models\Music;
use Livewire\Component;

class Category extends Component
{
    public $category;
    public $categoryType;

    public function mount($category) {
        $this->category = Music::where('category', $category)->get();
        $this->categoryType = urldecode($category);
    }
    public function render()
    {
        return view('livewire.pages.music.categores.category')
         ->layout('layouts.layout',['title' => 'Categoria:' . ' ' . $this->categoryType]);
    }
}
