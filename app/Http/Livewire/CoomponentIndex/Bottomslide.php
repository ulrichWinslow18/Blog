<?php

namespace App\Http\Livewire\CoomponentIndex;

use Livewire\Component;
use App\Models\Annonce;

class Bottomslide extends Component
{
    public function render()
    {
        return view('livewire.coomponent-index.bottomslide',[
            'pubs'=> Annonce::all(),
        ]);
    }
}
