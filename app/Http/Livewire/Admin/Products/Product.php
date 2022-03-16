<?php

namespace App\Http\Livewire\Admin\Products;


use App\Models\Image;
use App\Models\Category;
use App\Models\Product as Model_Product;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class Product extends Component
{    
    use WithFileUploads;
    
    protected $listeners = [''];
        
    public $default_dir = "app" . DIRECTORY_SEPARATOR;
    public $_store_dir = "assets" . DIRECTORY_SEPARATOR . "img" . DIRECTORY_SEPARATOR . "product";
    
    public $product_id;
    public $categories;
    public $image;
    public $title;
    public $category_id;
    public $link_page;
    public $slug;
    public $description;
    public $is_active;
    public $categories_image;
    public $_product;
    public $image_remove;
    public $model_image;
    
    public function mount($product_id = null){
        $this->product_id = $product_id;
    }
    
    public function render()
    {
        if($this->product_id){
            $this->_product = Model_Product::find($this->product_id);
            
            $this->title = $this->_product->title;
            $this->category_id = $this->_product->category_id;
            $this->link_page = $this->_product->link_page;
            $this->description = $this->_product->description;
            $this->is_active = $this->_product->is_active;
            $this->slug = $this->_product->slug;
            
            foreach ($this->_product->images as $image) {
                $this->model_image = $image;
            }
            
        }
        
        $this->categories = Category::all();
        $this->categories_image = "";
        
        foreach($this->categories as $key => $c){
            $image = $c->images->first();
            if(!$image){
                continue;
            }
            $img_link = route('images', ['size' => '50', 'f' => class_basename($c), 'image'=> $image->id]);
            
            $this->categories_image .= "'{$c->id}':'{$img_link}'";
            
            
            if($key != count($this->categories) -1){
                $this->categories_image .=",";
            }
        }
        
        return view('livewire.admin.products.product');
    }
    
    public function saveProduct(){
        if($this->product_id){
            $this->validate([
                'title'=> 'required|unique:products,title,'.$this->product_id,
                'slug'=> 'unique:products,slug,'.$this->product_id,
                'category_id'=> 'required',
                'link_page'=> 'required',
                'description'=> 'required',
            ]);
        }else{
            $this->validate([
                'title'=> 'required|unique:products',
                'slug'=> 'unique:products',
                'category_id'=> 'required',
                'link_page'=> 'required',
                'description'=> 'required',
                'image' => 'image',
            ]);
        }
        
        
        $P = ($this->product_id ? $this->_product : new Model_Product());
        $P->title = $this->title;
        $P->category_id = $this->category_id;
        $P->link_page = $this->link_page;
        $P->description = $this->description;
        $P->is_active = intval($this->is_active) == 1;
        $P->slug = Str::slug($P->title, '-');
        $r = $P->save();
        
        if (intval($this->image_remove) == 1) {
            foreach ($P->images as $image) {
                if (File::exists(storage_path($this->default_dir . $image->src))) {
                    Storage::delete($image->src);
                }
                $image->delete();
            }
        }
        
        if ($this->image) {
            
            if($this->product_id){
                foreach ($P->images as $image) {
                    if (File::exists(storage_path($this->default_dir . $image->src))) {
                        Storage::delete($image->src);
                    }
                    $image->delete();
                }
            }
            
            $_src = $this->image->store($this->_store_dir);
            
            $_I = new Image();
            $_I->name = $P->title;
            $_I->alt = $P->title;
            $_I->src = $_src;
            $_I->imageable_type = get_class($P);
            $_I->imageable_id = $P->id;
            $_I->save();
        }
        
        if ($r)
            session()->flash('message', 'Product '.($this->product_id ? 'updated' : 'created').'  with successfully!');
        else
            session()->flash('error', 'It was not possible to save the Product, operation canceled!');
        
        if($this->product_id){
            return redirect(route('admin.products'));
        }else{
            return redirect(route('admin.products.edit', $P));
        }
       
        
    }
    
    
    public function updatedImage(){
        if($this->product_id){
            
            foreach ($this->_product->images as $image) {
                if (File::exists(storage_path($this->default_dir . $image->src))) {
                    Storage::delete($image->src);
                }
                $image->delete();
            }
            
            $_src = $this->image->store($this->_store_dir);
            
            $_I = new Image();
            $_I->name = $this->_product->title;
            $_I->alt = $this->_product->title;
            $_I->src = $_src;
            $_I->imageable_type = get_class($this->_product);
            $_I->imageable_id = $this->_product->id;
            $_I->save();
        }
    }
    
    
    public function removeImage($id){
        $_I = Image::find($id);
        if($_I){
            if (File::exists(storage_path($this->default_dir . $_I->src))) {
                Storage::delete($_I->src);
            }
            $_I->delete();            
        }
        
        return redirect(route('admin.products.edit', $this->product_id));
    }
}
