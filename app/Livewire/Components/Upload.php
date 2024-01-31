<?php

namespace App\Livewire\Components;

use App\Livewire\Forms\MusicForm;
use Livewire\Component;
use Livewire\WithFileUploads;

class Form extends Component
{
    use WithFileUploads;

    public MusicForm $upload;

    public function upload() {

        if (!is_null($this->form->cover_path)) {
            $name = $this->form->cover_path->hashName();
            $this->form->cover_path->storeAs('images', $name, 'public');
        }


    }

    public function render()
    {
        return view('livewire.components.form');
    }
}
