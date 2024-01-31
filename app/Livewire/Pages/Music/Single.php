<?php

namespace App\Livewire\Pages\Music;

use App\Models\Music;
use Livewire\Attributes\Computed;
use Livewire\Component;

class Single extends Component
{
    public $music;

    #[Computed(persist: true)]
    public function mount($slug){
        $this->music = Music::where('slug', $slug)->firstOrFail();
    }

    public function render()
    {
        return view('livewire.pages.music.single')->layout('layouts.layout', ['title' => 'Música: ' . $this->music->title]);
    }
}
