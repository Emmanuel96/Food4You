<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Messages\NexmoMessage;
use Auth;


class newOrderReceived extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     *
     * @return void
     */

    
    private $user_name; 
    public $buyer_phone_number;
    
    public function __construct($phone, $buyer_name)
    {
        //get the name of the restaurant 
       $this->buyer_phone_number = $phone; 
       $this->user_name = $buyer_name;

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

    public function routeNotificationForNexmo($notification)
    {
        return $this->phone;
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
                    ->content("Hello from Hungry Rout3s.". $this->user_name. ' ('. $this->buyer_phone_number.') just made an order');
    }

    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
