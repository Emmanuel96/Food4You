<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Messages\NexmoMessage;


class newOrderReceived extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     *
     * @return void
     */

    private $user_name = " "; 
    private $phone_no = ""; 
    public function __construct($name, $phone)
    {
        //get the name of the restaurant 
       $this->user_name = $name; 
       $this->phone_no = $phone; 
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['nexmo'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */

    public function toNexmo($notifiable)
    {
        return (new NexmoMessage)
                    ->content($this->user_name. ' ('. $this->phone_no.') just made an order');
    }

    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
