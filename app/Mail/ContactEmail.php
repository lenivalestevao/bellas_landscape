<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Str;
use App\Models\Service;
use App\Models\Setting;
use Carbon\Carbon;

class ContactEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $_name;
    public $_phone_number;
    public $_service_id;
    public $_date;
    public $_msg;
    public $_type;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($_name, $_phone_number, $_msg, $_type = null, $_service_id = null, $_date = null)
    {
        $this->_name = $_name;
        $this->_phone_number = $_phone_number;
        $this->_msg = $_msg;
        $this->_service_id = $_service_id;
        $this->_date = $_date;
        $this->_type = $_type ? $_type : 'Contact';
        
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $service = null;
        if($this->_service_id){
            $service = Service::find($this->_service_id);
        }
        
        $setting = Setting::get()->first();
                
        return $this->from(config('mail.from.address'), config('mail.from.name'))
        ->subject("{$this->_type} - from website bellaslandscape.com")
        ->markdown('mail.user_contact', [
            'service' => $service ? Str::Title($service->name) : null,
            'name' => Str::Title($this->_name),
            'phone_number' => $this->_phone_number,
            'msg' => $this->_msg,
            'date' => Carbon::parse($this->_date)->format('d/m/Y g:i A'),
            'type' => $this->_type,
            'corp' => $setting->title,
            'logo' => $setting->logo,
        ]);
    }
}
