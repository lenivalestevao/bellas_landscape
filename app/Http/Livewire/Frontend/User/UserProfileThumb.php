<?php

namespace App\Http\Livewire\Frontend\User;

use Livewire\Component;

class UserProfileThumb extends Component
{
    
    public $cart, $orders, $favorites;
    
    public function mount()
    {
        $this->cart = 0;
        $this->orders = 0;
        $this->favorites = 0;
    }
    
    public function render()
    {
        return view('livewire.frontend.user.profile-thumb');
    }
  
}
