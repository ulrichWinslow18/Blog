<?php

namespace App\Http\Livewire\CoomponentIndex;

use Livewire\Component;
use App\Models\CategoriesBlog;
class Categories extends Component
{
    public $count = 0;
 
    public function increment()
    {
        $this->count++;
    }
    public function render()
    {
        return view('livewire.coomponent-index.categories',[
            'cats'=>CategoriesBlog::all(),
        ]);
    }
}
