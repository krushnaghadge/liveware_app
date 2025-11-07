<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Service;

class ShowHome extends Component
{
    public function render()
    {
        $services = Service::orderby('title', 'ASC')->get();
        return view('livewire.show-home', [
            'services' => $services,
        ]);
    }
}
