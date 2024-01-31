<?php

namespace App\Livewire\Pages\Music;

use Livewire\Component;

class MusicCreate extends Component
{
    public function render()
    {
        return view('livewire.pages.music.music-create')->layout('layouts.layout', ['title' => 'Criar Muúica']);
    }
}
