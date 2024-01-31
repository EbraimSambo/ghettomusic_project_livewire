<?php

namespace App\Livewire\Components;

use App\Models\Music;
use Livewire\Component;

class Download extends Component
{
    public Music $music;
    public $count;

    public function mount(Music $music) {
        $this->music = $music;
        $this->count = $music->download;
    }

    public function download(){
        $this->music->download ++;
        $filePath = public_path('storage/' . $this->music->audio_path);
        $this->music->save();
        $this->count = $this->music->download;
       // return response()->download($filePath, $this->music->title.' - ' .$this->music->artist . '.' . pathinfo($this->music->audio_path, PATHINFO_EXTENSION));
    }
    public function render()
    {
        return view('livewire.components.download');
    }
}
