<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\Component;

class BlogDetail extends Component
{

public $blogID=null;

    public function mount($id)
    {
        // You can use the $id parameter to fetch blog details from the database
        // For example:
        // $this->blog = Blog::find($id);
        $this->blogID = $id;
    }

    public function render()
    {
        $article = Article::Select('articles.*','categories.name as category_name')->LeftJoin('categories', 'articles.category_id', '=', 'categories.id')->where('articles.id', $this->blogID)->first();
        return view('livewire.blog-detail', ['article' => $article]);
    }
}
