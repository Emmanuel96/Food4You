<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\NexmoMessage;


class TacoVanIsAround extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
      private $buyerName; 
    public function __construct($bName)
    {
        $this->buyerName = $bName;
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
   public function toNexmo($notifiable)
    {
        return (new NexmoMessage)
                    ->content('Hi '.$this->buyerName. 'The Eat-Is-Greek Food van is now available for delivery from now till 8PM. It is located right opposite the Santander Bank.'. 
                        ' Hurry up before it is all finished')
                    ;
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
