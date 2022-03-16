<?php

namespace App\Http\Livewire\Frontend\Product;

use Livewire\Component;

class ProductView extends Component
{
    public $view = 'grid';
    public $products;
    public $category;
    
    public function mount($products, $view, $category){
        $this->products = $products;
        $this->view = $view;
        $this->category = $category;
    }
    
    public function render()
    {       
        if($this->view == 'list'){
            return view('livewire.frontend.product.product-list-view');
        } else{
            return view('livewire.frontend.product.product-grid-view');
        }
    }
    
    protected $listeners = ['changeViewTo'];
    public function changeViewTo($value){
        $this->view = array_merge($this->view, $value);        
    }
    
}
