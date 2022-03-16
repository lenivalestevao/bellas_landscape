<?php

namespace App\Http\Livewire\Frontend\Product;

use Illuminate\Support\Facades\DB;
use Livewire\Component;
use App\Models\Category;
use App\Models\Product;

class ProductSearch extends Component
{
    public $search, $count;
    public $category;
    public $perPage = 12;
    public $total = 0;
    public $current_page=0;
    public $total_products = 0;
    public $view;
    
    protected $listeners = ['loadMore'];
    
    
    public function mount($category, $view){
        $this->category = $category;
        $this->view = $view;
        
        $this->total_products = Product::select(DB::raw("COUNT(*) as nCount"))->get()->first()->nCount;
    }
    
    
    public function render()
    {
        if(!$this->search){
            $this->perPage = 12;
        }
                
        $categories = Category::where('active', true)->orderBy('title','ASC')->get();
        $products = Product::where('is_active', true);
        
        if($this->category){
            $category_slug = $this->category;
            $products = $products->WhereExists(function($query) use($category_slug){
                $query->select(DB::raw(1))
                ->from('categories')
                ->whereRaw('products.category_id = categories.id')
                ->where('categories.slug', $category_slug)
                ->where('categories.active', true);   
            });
        }
        
        $products = $products->paginate($this->perPage);
        
        $this->total = $products->total();
        $this->current_page = $products->currentPage();
        
        return view('livewire.frontend.product.product-search', [
            'categories' => $categories,
            'products' => $products->items()
        ]);
    }
    
    
    public function loadMore()
    {
        if($this->perPage < $this->total){
            if(($this->perPage+12) > $this->total){
                $this->perPage += ($this->total - $this->perPage);
            }else{
                $this->perPage += 12;
            }
            
        }
        
        
    }
            
}
