<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class ContactUs extends Notification
{
    use Queueable;


    public $data;
    public function __construct($data)
    {
        $this->data = $data;
    }

   
    public function via($notifiable)
    {
        return ['mail'];
    }


    public function toMail($notifiable)
    {
        return (new MailMessage)
->line('Te hemos contactado a través de tu portafolio')
->line($this->data->inputName)                    
->line($this->data->inputMessage)
->line($this->data->inputEmail)
->line($this->data->inputPhone);

    }


    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
