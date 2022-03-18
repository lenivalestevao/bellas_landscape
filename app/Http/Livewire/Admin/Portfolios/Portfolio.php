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
    public $_id;
    public $_portfolio;
    public $service_id;
    public $services_image;
    public $title; 
    public $is_active;
    
    public function mount($_id = null){
        $this->_id = $_id;
    }
    
    public function render()
    {
        if($this->_id){
            $this->_portfolio = Model_Portfolio::find($this->_id);
            
            $this->title = $this->_portfolio->title;
            $this->service_id = $this->_portfolio->service_id;
            $this->is_active = $this->_portfolio->is_active;
            
        }
        
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
}
