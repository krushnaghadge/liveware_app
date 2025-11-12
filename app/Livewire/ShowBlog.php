<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Article;
use App\Models\Category;
use Livewire\Attributes\Url;
use Livewire\WithPagination;



class ShowBlog extends Component
{
    use WithPagination;
    #[Url]
    public $categorySlugs = null;
    protected $queryString = ['categorySlugs'];

    public function render()
    {

        $categories = Category::all();




        if (!empty($this->categorySlugs)) {

            $category = Category::where('slug', $this->categorySlugs)->first();
            if (empty($category)) {
                abort(404); // Empty collection if category not found
            }

            $articles = Article::OrderBy('created_at', 'DESC')
                ->where('category_id', $category->id)
                ->where('status', 1)
                ->paginate(2);

            // dd($category);
            // if ($category) {
            //     $articles = Article::where('category_id', $category->id)->OrderBy('created_at', 'DESC')->get();
            // } else {
            //     $articles = Article::OrderBy('created_at', 'DESC')->get();
            // }
        } else {
            $articles = Article::OrderBy('created_at', 'DESC')
                ->where('status', 1)
                ->paginate(2);
        }

   $latestArticles = Article::OrderBy('created_at', 'DESC')
                ->where('status', 1)
                ->get()
                ->take(3);


        return view(
            'livewire.show-blog',
            [
                'articles' => $articles,
                'categories' => $categories,
                'latestArticles' => $latestArticles,
            ]
        );
    }

    public function updatingCategorySlugs()
    {
        $this->resetPage();
    }
}
