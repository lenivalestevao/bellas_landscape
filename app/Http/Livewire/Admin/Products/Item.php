<?php

namespace App\Http\Livewire\Admin\Products;

use App\Models\ProductItem;
use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Image;
use App\Models\Color;
use App\Models\Size;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use App\Models\Product;

class Item extends Component
{    
    use WithFileUploads;
    
    protected $listeners = ['save_item'];
    
    public $_item;
    public $_sizes;
    public $_colors;
    
    public $item_id;
    public $product_id;

    public $color_id;
    public $size_id;
    public $title;
    public $slug;
    public $price;    
    public $imageItem;
      
    public $default_dir = "app" . DIRECTORY_SEPARATOR;
    public $_store_dir = "assets" . DIRECTORY_SEPARATOR . "img" . DIRECTORY_SEPARATOR . "item";
    
    public function mount($product_id = null, $item_id = null){
        $this->product_id = $product_id;
        $this->item_id = $item_id;
        
        $this->loadItem();
    }
    
    protected function loadItem(){
        if($this->item_id){
            $_item = ProductItem::find($this->item_id);
            
            $this->title = $_item->title;
            $this->color_id = $_item->color_id;
            $this->size_id = $_item->size_id;
            $this->slug = $_item->slug;
            $this->price = $_item->price;
        }
    }
    
    public function render()
    {
        if($this->item_id)
            $this->_item = ProductItem::find($this->item_id);
        
        $this->_colors = Color::all();
        $this->_sizes = Size::all();
        
        return view('livewire.admin.products.item');
    }
        
    public function updatedImageItem(){
        if($this->item_id && $this->imageItem){
            
            $product_name = $this->_item->product->title;
            
            $_src = $this->imageItem->store($this->_store_dir);
            
            $_I = new Image();
            $_I->name = $product_name;
            $_I->alt = $product_name;
            $_I->src = $_src;
            $_I->imageable_type = get_class($this->_item);
            $_I->imageable_id = $this->_item->id;
            $_I->save();
        }
    }
    
    public function removeImage($id){
        if($this->item_id){
            $_I = Image::find($id);
            if($_I){
                if (File::exists(storage_path($this->default_dir . $_I->src))) {
                    Storage::delete($_I->src);
                }
                $_I->delete();
            }
        }
    }
    
    public function save_item(){
        if($this->item_id){
            $this->validate([
                'title'=> 'unique:product_items,title,'.$this->item_id,
                'slug'=> 'unique:product_items,slug,'.$this->item_id,
                'price'=> 'required',
            ]);
            
            $this->_item = ProductItem::find($this->item_id);
        }else{
            
            $this->validate([
                'title'=> 'unique:product_items',
                'slug'=> 'unique:product_items',
                'price'=> 'required',
            ]);
            
            $this->_item = new ProductItem();
        }
        
        $p = Product::find($this->product_id); 
        
        if(!$this->title){
            $this->title = $p->title;
            if($this->color_id){
                $c = Color::find($this->color_id);
                $this->title .= " {$c->name}";
            }
            
            if($this->size_id){
                $s = Size::find($this->size_id);
                $this->title .= " {$s->name}";
            }
        }
        
        if(!$this->slug){
            $this->slug = $this->title;
        }
        
        $this->_item->title = $this->title;
        $this->_item->color_id = $this->color_id;
        $this->_item->product_id = $this->product_id;
        $this->_item->size_id = $this->size_id;
        $this->_item->title = $this->title;
        $this->_item->slug = Str::slug($this->title, '-');
        $this->_item->price = $this->price;
        $r = $this->_item->save();
        
        if ($r)
            session()->flash('message', 'Product Item '.($this->item_id ? 'updated' : 'created').'  with successfully!');
        else
            session()->flash('error', 'It was not possible to save the Product Item, operation canceled!');
        
        $this->item_id = $this->_item->id;
        
        return redirect(route('admin.products.edit', $this->product_id));
            
    }
    
    public function delete_item(){
        if($this->item_id){
            $this->_item = ProductItem::find($this->item_id);
            
            foreach ($this->_item->images as $image) {
                if (File::exists(storage_path($this->default_dir . $image->src))) {
                    Storage::delete($image->src);
                }
                $image->delete();
            }
            
            $r = $this->_item->delete();
            
            if ($r)
                session()->flash('message', 'Product Item deleted with successfully!');
            else
                session()->flash('error', 'It was not possible to delete the Product Item, operation canceled!');
            
        }
        
        return redirect(route('admin.products.edit', $this->product_id));
    }
   
}
