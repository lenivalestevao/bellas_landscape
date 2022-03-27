<?php

namespace App\Http\Livewire\Frontend\Appointment;

use App\Models\Service;
use Livewire\Component;
use PHPUnit\Exception;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactEmail;
use App\Models\Setting;
use Carbon\Carbon;

class AppointmentForm extends Component
{
    
    public $name;
    public $phone_number;
    public $service_id;
    public $schedule_date;
    public $msg;
    
    protected $rules = [
        'name' => 'required|min:6',
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
        $setting = Setting::get()->first();
        $date_formated = Carbon::createFromFormat('F, d Y H:i', $this->schedule_date);
        try {
            Mail::to($setting->email)->send(new ContactEmail($this->name, $this->phone_number, $this->msg, 'Appointment', ($this->service_id ? $this->service_id : null), $date_formated));
            
            session()->flash('message', 'We will contact you soon we can. Thanks for your business.');
            session()->flash('title', 'Your message has send');
            
            return redirect(route('frontend.home'));
        } catch (Exception $e) {
            session()->flash('error', 'It was not possible to send e-mail,please try again, operation canceled!');
        }
        
        
        
    }
}
