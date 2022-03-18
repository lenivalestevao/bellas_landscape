<?php

namespace App\Http\Livewire\Frontend\Service;

use App\Models\Service;
use Livewire\Component;

class ListServices extends Component
{
    public function render()
    {
        
        $services = Service::orderBy('name','ASC')->get();
        return view('livewire.frontend.service.list-services',['list_services' => $services]);
    }
}
