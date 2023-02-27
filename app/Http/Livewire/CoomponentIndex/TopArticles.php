<?php

namespace App\Http\Livewire\CoomponentIndex;

use Livewire\Component;
use App\Models\Count;
use App\Models\article;
use App\Models\CategoriesBlog;
class TopArticles extends Component
{
   

    public function render()
    {
        return view('livewire.coomponent-index.top-articles',[
            'articles' =>article::all(),
            'tops' =>Count::orderBy('count','desc')->take(4)->get(),
             'cats' => CategoriesBlog::all(),
        ]);
    }


    
    
    
    
    public Function saveCount($id){
        $count = 0;
        $tab = Count::all()->pluck('article_id')->toArray();

        if (!in_array($id,$tab)){
            Count::insert(['article_id'=>$id,'count'=> $count+1]);
        }
        else{
           $var2 = Count::where('article_id',$id)->value('count');
           Count::where('article_id',$id)->update(['article_id'=> $id,'count'=> $var2+1]); 
        }
    }
}
