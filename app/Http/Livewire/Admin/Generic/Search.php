<?php

namespace App\Http\Livewire\Admin\Generic;


use Livewire\Component;

class Search extends Component
{
    public $search;
    public $page;
    public $column;
    public $is_asc;
    public $route_name;
    protected $listeners = ['searhBy','columnSorteBy'];
    
    public function mount($page, $search, $route_name, $column = 'title', $is_asc = 'ASC')
    {
        $this->search = $search;
        $this->page = $page;
        $this->column = $column;
        $this->is_asc = $is_asc;
        $this->route_name = $route_name;
    }
    
    public function render()
    {
        return view('livewire.search');
    }
    
    public function updatedSearch(){
        if(strlen($this->search) > 0){
            $url = route($this->route_name, ['page'=> 1, 'search' => $this->search]);
        }else{
            $url = route($this->route_name, ['page'=> $this->page]);
        }
                
        if($this->column)
            $url = $url . "&column=".$this->column;
        if($this->is_asc)
            $url = $url . "&order=".$this->is_asc;
        
        return redirect($url);
    }
    
    public function searhBy(){
        
        if(strlen($this->search) > 0)
            $url = route($this->route_name, ['page'=> $this->page, 'search' => $this->search]);
        else 
            $url = route($this->route_name, ['page'=> $this->page]);
        
        if($this->column)
            $url = $url . "&column=".$this->column;
        if($this->is_asc)
            $url = $url . "&order=".$this->is_asc;
            
        return redirect($url);
    }
  
    public function columnSorteBy($column, $is_asc){
        $this->column = $column;
        $this->is_asc = $is_asc;
        
        if(strlen($this->search) > 0){
            $url = route($this->route_name, ['page'=> 1, 'search' => $this->search, 'column' => $column, 'order' => $this->is_asc]);
        }else{
            $url = route($this->route_name, ['page'=> $this->page, 'column' => $column, 'order' => $this->is_asc]);
        }
        
        return redirect($url);
    }
}
