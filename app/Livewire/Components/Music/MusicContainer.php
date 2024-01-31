<?php

namespace App\Livewire\Components\Music;

use App\Models\Music;
use Livewire\Attributes\Computed;
use Livewire\Component;

class MusicContainer extends Component
{

    #[Computed(persist: true)]
    public function render()
    {
        return view('livewire.components.music.music-container',[
            'musics' => Music::orderBy('id','desc')->paginate(8)
        ]);
    }
}
