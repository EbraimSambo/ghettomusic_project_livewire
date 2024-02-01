<?php

namespace App\Livewire\Pages\Music;

use App\Models\Music;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class MusicIndex extends Component
{
    public function render(Music $music)
    {
        return view('livewire.pages.music.music-index',[
            'all' => Music::all(),
            'tops' => DB::table('music')->where('download', '>', 0)->orderByDesc('download')->take(8)->get(),
            'new' => $music->orderBy('id','desc')->paginate(8)
        ])->layout('layouts.layout',['title' => 'Todas músicas']);
    }
}
