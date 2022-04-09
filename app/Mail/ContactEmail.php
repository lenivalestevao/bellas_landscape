<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Str;
use App\Models\Service;
use App\Models\Setting;
use App\Models\Contact as ContactModel;
use Carbon\Carbon;
use App\Models\Telephone;

class ContactEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $contactModel;
    public $_service_id;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(ContactModel $contactModel, $_service_id)
    {
        $this->contactModel = $contactModel;
        $this->_service_id = $_service_id;
        
    }

    public function sendTextMessage($number, $carrier, $subject, $msg){
        
        $carrier_list = Array(
            'att'           => 'txt.att.net',
            'verizon'       => 'vtext.com',
            'tmobile'       => 'tmomail.net',
            'sprint'        => 'messaging.sprintpcs.com',
            'nextel'        => 'messaging.nextel.com'
        );
        
        $smpt_config = config('mail.mailers.smtp');
        
        // Create the Transport
        $transport = (new \Swift_SmtpTransport($smpt_config["host"], $smpt_config["port"]))->setUsername($smpt_config["username"])->setPassword($smpt_config["password"]);
        
        // Create the Mailer using your created Transport
        $mailer = new \Swift_Mailer($transport);
        
        $_carrier = $carrier_list[$carrier];
        
        // Create a message
        $message = (new \Swift_Message($subject))
        ->setFrom([config('mail.from.address') => config('mail.from.name')])
        ->setTo(["{$number}@{$_carrier}"])
        ->setBody($msg);
        
        // Send the message
        $result = $mailer->send($message);
        
        return $result;
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
        
        $msg_sms = "Hello you receive new ".($service ? $service->name : 'Contact');
        
        if($this->contactModel->name) {
            $msg_sms = $msg_sms . " Name: ".Str::Title($this->contactModel->name);
        }
        if($this->contactModel->phone_number) {
            $msg_sms = $msg_sms . " Phone Number: {$this->contactModel->phone_number}";
        }
        if($this->contactModel->date_scheduled) {
            $msg_sms = $msg_sms . " Date: ".Carbon::parse($this->contactModel->date_scheduled)->format('d/m/Y g:i A');
        }
       
        $msg_sms = $msg_sms . " {$this->contactModel->msg}";
        
        $telephones = Telephone::all();
        foreach($telephones as $t){
            $this->sendTextMessage($t->number, $t->carrier, ($service ? $service->name : 'contact')." - from website", $msg_sms);
        }
        
//         $this->sendTextMessage("4057549889", "verizon", ($service ? $service->name : 'contact')." - from website", $msg_sms);
        
        return $this->from(config('mail.from.address'), config('mail.from.name'))
        ->subject(($service ? $service->name : 'contact')." - from website bellaslandscape.com")
        ->markdown('mail.user_contact', [
            'service' => Str::Title($this->contactModel->service),
            'name' => Str::Title($this->contactModel->name),
            'phone_number' => $this->contactModel->phone_number,
            'msg' => $this->contactModel->msg,
            'date' => $this->contactModel->date_scheduled,
            'type' => $service ? $service->name : 'contact',
            'corp' => $setting->title,
            'logo' => $setting->logo,
            'email' => $this->contactModel->email
        ]);
    }
}
