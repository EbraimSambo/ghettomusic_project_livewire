<?php

namespace App\Livewire\Pages\Music\Categores;

use Livewire\Component;

class CategoresIndex extends Component
{
    public function render()
    {
        return view('livewire.pages.music.categores.categores-index')->layout('layouts.layout',['title' => 'Categorias']);
    }
}
