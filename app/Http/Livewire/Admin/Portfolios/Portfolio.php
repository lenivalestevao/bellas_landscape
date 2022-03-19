<?php

namespace App\Http\Livewire\Admin\Portfolios;

use App\Models\Service;
use Livewire\Component;

use App\Models\Image;
use App\Models\Portfolio as Model_Portfolio;
use Livewire\WithFileUploads;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class Portfolio extends Component
{
    use WithFileUploads;
    
    public $_id;
    public $_portfolio;
    public $service_id;
    public $services_image;
    public $title; 
    public $is_active = 1;
    public $imageUpload;
    public $default_dir = "app" . DIRECTORY_SEPARATOR;
    public $_store_dir = "assets" . DIRECTORY_SEPARATOR . "img" . DIRECTORY_SEPARATOR . "portfolio";
    
    
    public function mount($_id = null){
        $this->_id = $_id;
        
        if($this->_id){
            $this->_portfolio = Model_Portfolio::find($this->_id);
            $this->title = $this->_portfolio->title;
            $this->service_id = $this->_portfolio->service_id;
            $this->is_active = $this->_portfolio->is_active;
        }
    }
    
    public function render()
    {
        $services = Service::orderBy('name', 'ASC')->get();
        
        $this->services_image = "";
        
        foreach($services as $key => $s){
            $image = $s->images->first();
            if(!$image){
                continue;
            }
            $img_link = route('images', ['size' => '50', 'f' => class_basename($s), 'image'=> $image->id]);
            
            $this->services_image .= "'{$s->id}':'{$img_link}'";
            
            
            if($key != count($services) -1){
                $this->services_image .=",";
            }
        }
        
        return view('livewire.admin.portfolios.portfolio',['services' => $services]);
    }
    
    public function savePortfolio(){
        if($this->_id){
            $this->validate([
                'title'=> 'required|unique:portfolios,title,'.$this->_id
            ]);
        }else{
            $this->validate([
                'title'=> 'required|unique:portfolios'
            ]);
        }
        
        
        $P = ($this->_id ? $this->_portfolio : new Model_Portfolio());
        $P->title = $this->title;
        $P->service_id = $this->service_id;
        $r = $P->save();
        
       
        
        if ($r)
            session()->flash('message', 'Portfolio '.($this->_id ? 'updated' : 'created').'  with successfully!');
        else
            session()->flash('error', 'It was not possible to save the Product, operation canceled!');
                
        if($this->_id){
            return redirect(route('admin.portfolio'));
        }else{
            return redirect(route('admin.portfolio.edit', $P));
        }     
    }
    
    public function updatedImageUpload(){
        if($this->_id && $this->imageUpload){
            
            $title = $this->_portfolio->title;
            
            $_src = $this->imageUpload->store($this->_store_dir);
            
            $_I = new Image();
            $_I->name = $title;
            $_I->alt = $title;
            $_I->src = $_src;
            $_I->imageable_type = get_class($this->_portfolio);
            $_I->imageable_id = $this->_portfolio->id;
            $_I->save();
        }
        
        return redirect(route('admin.portfolio.edit', $this->_id));
    }
    
    public function removeImage($id){
        if($this->_id){
            $_I = Image::find($id);
            if($_I){
                if (File::exists(storage_path($this->default_dir . $_I->src))) {
                    Storage::delete($_I->src);
                }
                $_I->delete();
            }
        }
        
        return redirect(route('admin.portfolio.edit', $this->_id));
    }
}
