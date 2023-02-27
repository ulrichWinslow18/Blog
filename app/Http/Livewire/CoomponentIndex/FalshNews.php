<?php

namespace App\Http\Livewire\CoomponentIndex;

use App\Models\FlashNews;
use Livewire\Component;

class FalshNews extends Component
{
    public function render()
    {
        return view('livewire.coomponent-index.falsh-news',[
            'news'=>FlashNews::all(),
        ]);


    }
}
