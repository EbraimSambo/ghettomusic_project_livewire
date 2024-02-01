<?php

namespace App\Livewire\Pages\Music;

use App\Models\Music;
use Illuminate\Support\Facades\DB;
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
        return view('livewire.pages.music.single',
        [
            'similars' => Music::inRandomOrder()->take(8)->where('category', $this->music->category)->get(),
            'author' => Music::inRandomOrder()->take(8)->where('artist', $this->music->artist)->get(),
            'tops' => DB::table('music')
                    ->where('download', '>', 0)
                    ->where('artist', '=', $this->music->artist)
                    ->orderByDesc('download')
                    ->take(8)->get(),
        ])->layout('layouts.layout', ['title' => 'Música: ' . $this->music->title]);
    }
}
