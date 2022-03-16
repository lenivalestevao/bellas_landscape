<?php

namespace App\Http\Livewire\Admin\Generic;

use Illuminate\Container\Container;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Livewire\Component;

class Tablegeneric extends Component
{
   
    public $icon_asc = "<span class='asc_icon'><span class='svg-icon svg-icon-3 svg-icon-success me-2'><svg xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' width='24px' height='24px' viewBox='0 0 24 24' version='1.1'><g stroke='none' stroke-width='1' fill='none' fill-rule='evenodd'><polygon points='0 0 24 0 24 24 0 24'></polygon><rect fill='#000000' opacity='0.5' x='11' y='5' width='2' height='14' rx='1'></rect><path d='M6.70710678,12.7071068 C6.31658249,13.0976311 5.68341751,13.0976311 5.29289322,12.7071068 C4.90236893,12.3165825 4.90236893,11.6834175 5.29289322,11.2928932 L11.2928932,5.29289322 C11.6714722,4.91431428 12.2810586,4.90106866 12.6757246,5.26284586 L18.6757246,10.7628459 C19.0828436,11.1360383 19.1103465,11.7686056 18.7371541,12.1757246 C18.3639617,12.5828436 17.7313944,12.6103465 17.3242754,12.2371541 L12.0300757,7.38413782 L6.70710678,12.7071068 Z' fill='#000000' fill-rule='nonzero'></path></g></svg></span></span>";
    public $icon_desc = "<span class='desc_icon'><span class='svg-icon svg-icon-3 svg-icon-danger me-2'><svg xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' width='24px' height='24px' viewBox='0 0 24 24' version='1.1'><g stroke='none' stroke-width='1' fill='none' fill-rule='evenodd'><polygon points='0 0 24 0 24 24 0 24'></polygon><rect fill='#000000' opacity='0.5' x='11' y='5' width='2' height='14' rx='1'></rect><path d='M6.70710678,18.7071068 C6.31658249,19.0976311 5.68341751,19.0976311 5.29289322,18.7071068 C4.90236893,18.3165825 4.90236893,17.6834175 5.29289322,17.2928932 L11.2928932,11.2928932 C11.6714722,10.9143143 12.2810586,10.9010687 12.6757246,11.2628459 L18.6757246,16.7628459 C19.0828436,17.1360383 19.1103465,17.7686056 18.7371541,18.1757246 C18.3639617,18.5828436 17.7313944,18.6103465 17.3242754,18.2371541 L12.0300757,13.3841378 L6.70710678,18.7071068 Z' fill='#000000' fill-rule='nonzero' transform='translate(12.000003, 14.999999) scale(1, -1) translate(-12.000003, -14.999999)'></path></g></svg></span></span>";
    
    public $table_name;
    public $_columns_table;
    public $column;
    public $is_asc;
    public $page;
    public $search;
    public $route_name;
    public $current_page;
    
    protected $listeners = ['columnSorteBy'];
    
    public function mount($columns_table, $table_name, $current_page, $page, $column = 'title', $is_asc = 'ASC', $search = '', $route_name){
       
        $this->table_name = $table_name;
        $this->_columns_table = $columns_table;
        
        $this->page = $page;
        $this->column = $column;
        $this->is_asc = $is_asc;
        $this->search = $search;
        $this->route_name = $route_name;
        $this->current_page = $current_page;
    }
    
    public function render()
    {
        $_APPNAME = Str::ucfirst(Str::singular($this->table_name));
        $appNamespace = Container::getInstance()->getNamespace();
        $modelNamespace = 'Models\\';
        $_M_NAME = $appNamespace.$modelNamespace.$_APPNAME;
        
        if (class_exists($_M_NAME)) {
            $tableTemp = app($_M_NAME);
        }else{
            $tableTemp = DB::table($this->table_name);
        }
                
        $columns_table = $this->_columns_table;
        
        $search = $this->search;
        if(strlen($this->search)>0){
            $tableTemp = $tableTemp->where(function($join) use($search, $columns_table){
                
                $parts = explode(" ", $search);
                
                if(count($parts) >1){
                    foreach ($parts as $value) {
                        if(trim($value) == "")
                            continue;
                            foreach($columns_table as $c){
                                if(!isset($c->is_date) && !isset($c->is_bool))
                                    $join->orWhere($c->name,'LIKE',"{$value}%");
                            }
                    }
                }else{
                    
                    foreach($columns_table as $c){
                        if(!isset($c->is_date) && !isset($c->is_bool))
                            $join->orWhere($c->name,'LIKE',"{$search}%");
                    }
                }
            });
        }
        
        foreach($columns_table as $c){
            if($this->column != $c->name)
                continue;
            
                $tableTemp = $tableTemp->orderBy($c->name, $this->is_asc);
                break;
        }
        
        
        
        
        $tableTemp = $tableTemp->paginate(8, ['*'], 'page', $this->current_page)->onEachSide(2);
        
        $elements_links = $tableTemp->links()['elements'];
        
        return view('livewire.tables',  [
            'table_temp' => $tableTemp, 
            'elements_links' => $elements_links, 
            'columns_table' => $columns_table,
        ]);
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
