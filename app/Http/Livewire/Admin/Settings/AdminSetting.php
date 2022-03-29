<?php
namespace App\Http\Livewire\Admin\Settings;

use Livewire\Component;
use App\Models\Setting;
use App\Models\State;
use App\Models\City;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Livewire\WithFileUploads;

class AdminSetting extends Component
{
    use WithFileUploads;
    
    protected $_SETTING;
    
    
    
    public $_logo;
    public $imageUpload;
    public $_title;
    public $_keywords;
    public $_description;
    public $_email;
    public $_whatsapp;
    public $_address;
    public $_city_id;
    public $_state_id;
    public $_zipcode;
    public $_twitter;
    public $_instagram;
    public $_youtube;
    public $_facebook;
    public $_tiktok;
    public $_CITIES;
    
    public $default_dir = "app" . DIRECTORY_SEPARATOR;
    public $_store_dir = "assets" . DIRECTORY_SEPARATOR . "img";
    
    public function mount(){
        $this->_SETTING = Setting::get()->first();
        
        $this->_logo = $this->_SETTING->logo;
        $this->_title = $this->_SETTING->title;
        $this->_keywords = $this->_SETTING->keywords;
        $this->_description = $this->_SETTING->description;
        $this->_email = $this->_SETTING->email;
        $this->_facebook = $this->_SETTING->facebook;
        $this->_twitter = $this->_SETTING->twitter;
        $this->_instagram = $this->_SETTING->instagram;
        $this->_youtube = $this->_SETTING->youtube;
        $this->_whatsapp = $this->_SETTING->whatsapp;
        $this->_tiktok = $this->_SETTING->tiktok;
        $this->_city_id = $this->_SETTING->city_id;
        $this->_address = $this->_SETTING->address;
        $this->_zipcode = $this->_SETTING->zip_code;
        
        
        $this->_CITIES = null;
        if($this->_city_id){
            $this->_state_id = City::find($this->_city_id)->state_id;
            $this->_CITIES = City::select('id','name')->where('id', $this->_city_id)->orderBy('name','ASC')->get();
        }
    }
    
    public function render()
    {
        $states = State::select('id','name')->orderBy('name','ASC')->get();
        return view('livewire.admin.settings.admin-setting',[ 'setting'=> $this->_SETTING, 'states' => $states]);
    }
    
    public function removeAvatar(){
        if (File::exists(storage_path($this->default_dir . $this->_logo))) {
            if(Storage::delete($this->_logo)){
                $this->_logo = null;
                
                $this->_SETTING = Setting::get()->first();
                $this->_SETTING->logo = null;
                $this->_SETTING->save();
            }
        }
    }
    
    public function updatedImageUpload(){
        if(!$this->imageUpload)
            return;
        
        $_src = $this->imageUpload->store($this->_store_dir);
        
        $this->_SETTING = Setting::get()->first();
        $this->_SETTING->logo = $_src;
        $this->_SETTING->save();
        
        $this->_logo = $_src;
    }
}
