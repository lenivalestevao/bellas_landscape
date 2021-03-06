<?php

namespace App\Http\Livewire\Frontend\Appointment;

use App\Models\Service;
use Livewire\Component;
use PHPUnit\Exception;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactEmail;
use App\Models\Setting;
use App\Models\Contact as ContactModel;
use Carbon\Carbon;

class AppointmentForm extends Component
{
    
    public $name;
    public $phone_number;
    public $service_id;
    public $schedule_date;
    public $msg;
    
    protected $rules = [
        'name' => 'required',
        'phone_number' => 'required|min:10',
        'msg' => 'required|min:6',
        'schedule_date' => 'required',
    ];
    
    public function render()
    {
        $services = Service::all();
        return view('livewire.frontend.appointment.appointment-form', ['services' => $services ]);
    }
        
    public function scheduleApp(){
        $this->validate();
        
        $service_name = 'Other';
        if($this->service_id){
            $s = Service::find($this->service_id);
            if($s)
                $service_name = $s->name;
        }
        
        
        $setting = Setting::get()->first();
        $date_formated = Carbon::createFromFormat('F, d Y H:i', $this->schedule_date);
        try {
            
            $_contact = new ContactModel();
            $_contact->title = 'Appointment Request';
            $_contact->name = $this->name;
            $_contact->phone_number = $this->phone_number;
            $_contact->service = $service_name;
            $_contact->date_scheduled = $date_formated;
            $_contact->msg = $this->msg;
            $_contact->is_send = false;
            $_contact->save();
            
            Mail::to($setting->email)->send(new ContactEmail($_contact, $this->service_id));
            
            
            $_contact->is_send = true;
            $_contact->save();
            
            session()->flash('message', 'We will contact you soon we can. Thanks for your business.');
            session()->flash('title', 'Your message has send');
            
            return redirect(route('frontend.home'));
        } catch (Exception $e) {
            session()->flash('error', 'It was not possible to send e-mail,please try again, operation canceled!');
        }
        
        
        
    }
}
