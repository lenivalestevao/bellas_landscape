<?php

namespace App\Http\Livewire\Frontend\Contact;

use App\Models\Service;
use App\Models\Setting;
use Carbon\Carbon;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;
use PHPUnit\Exception;
use App\Models\Contact as ContactModel;
use App\Mail\ContactEmail;

class ContactForm extends Component
{   
    public $contact_name;
    public $contact_email;
    public $contact_phone;
    public $contact_subject;
    public $contact_msg;
    
    protected $rules = [
        'contact_name' => 'required',
        'contact_phone' => 'required|min:10',
        'contact_msg' => 'required|min:6'
    ];
    
    
    public function render()
    {
        $services = Service::all();
        return view('livewire.frontend.contact.contact-form', ['services' => $services ]);
    }
    
    public function SendContact(){
        $this->validate();
        
        $service_name = 'Contact';
        if($this->contact_subject){
            $s = Service::find($this->contact_subject);
            if($s)
                $service_name = $s->name;
        }
        
        
        $setting = Setting::get()->first();
        
        try {
            
            $_contact = new ContactModel();
            $_contact->title = 'Contact' .($service_name != 'Contact' ? " {$service_name}" : '');
            $_contact->name = $this->contact_name;
            $_contact->phone_number = $this->contact_phone;
            $_contact->service = $service_name;
            $_contact->date_scheduled = null;
            $_contact->msg = $this->contact_msg;
            $_contact->is_send = false;
            $_contact->email = $this->contact_email;
            $_contact->save();
            
            Mail::to($setting->email)->send(new ContactEmail($_contact, $this->contact_subject));
            
            
            $_contact->is_send = true;
            $_contact->save();
            
            session()->flash('message', 'We will contact you soon we can. Thanks for your business.');
            session()->flash('title', 'Your message has send');
            
            return redirect(route('frontend.contact_us'));
        } catch (Exception $e) {
            session()->flash('error', 'It was not possible to send e-mail,please try again, operation canceled!');
        }
        
    }
}
