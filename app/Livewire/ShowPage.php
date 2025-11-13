<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Page;

class ShowPage extends Component
{

    public $pageId;

    public function mount($id)
    {
        $this->pageId = $id;
    }
    public function render()
    {
        $page = Page::findOrFail($this->pageId);
        // dump($pages);
        // if($pages->isEmpty()){
        //     abort(404);
        // }

        return view('livewire.show-page', ['page' => $page]);
    }
}
