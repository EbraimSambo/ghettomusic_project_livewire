<?php

namespace App\Livewire\Pages;

use App\Models\Music;
use Illuminate\Support\Facades\DB;
use Livewire\Attributes\Title;
use Livewire\Component;

class Home extends Component
{
    #[Title('Home')]
    public function render()
    {
        return view('livewire.pages.home',[
            'musics' => Music::orderBy('id','desc')->paginate(8),
            'recomend' => Music::inRandomOrder()->take(8)->get(),
            'tops' => DB::table('music')->where('download', '>', 0)->orderByDesc('download')->take(8)->get(),
        ])->layout('layouts.layout');
    }
}
