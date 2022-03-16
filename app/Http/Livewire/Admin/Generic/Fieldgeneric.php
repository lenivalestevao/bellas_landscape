<?php

namespace App\Http\Livewire\Admin\Generic;

use Livewire\Component;

class Fieldgeneric extends Component
{
    
    public $fields;
    public $action;
    public $obj;
    
    public function mount($fields, $action, $obj = null){
        $this->fields = $fields;
        $this->action = $action;
        $this->obj = $obj;
    }
    
    public function render()
    {
        return view('livewire.fieldgeneric',['my_fields' => $this->fields]);
    }
}
