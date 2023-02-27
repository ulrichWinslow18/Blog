<?php

namespace App\Http\Livewire\CoomponentIndex;

use Livewire\Component;
use App\Models\Article;
use App\Models\CategoriesBlog;

class RightSlide extends Component
{
    
    public function render()
    {
         $date = date('d');
        return view('livewire.coomponent-index.right-slide',[
            'unes' => $this->getArticle(),
            'cats' => CategoriesBlog::all(),
        ]);
    }

    public function getArticle()
    {
        $artRecent = Article::whereDate('created_at','<=', now())->orderBy('id','desc')->take(2)->get();
        return $artRecent;
    }
}
