<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Faq;

class ShowFaqPage extends Component
{
    public function render()
    {
        $faqs=Faq::where('status', 1)->orderBy('created_at', 'ASC')->get();
        return view('livewire.show-faq-page', ['faqs' => $faqs]);
    }
}
