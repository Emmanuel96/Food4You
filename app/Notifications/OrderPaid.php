<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use App\Notifications\OrderPaid;

class OrderPaid extends Notification
{
    use Queueable;
    
    /**
     * Create a new notification instance.
     *
     * @return void
     */
    private $payment_ref;
    public function __construct($ref)
    {
        //$user->notify(new OrderPaid($Order));
        $this->payment_ref = $ref;
    }

    //public function routeNotificationForMail($notification)
    //{
      //  return $this->buyer_email;
    //}

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mailgun'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        
        return (new MailMessage)
                    ->from('Hello!')
                    ->line('Details of your order from NaijaBites.')
                    ->content('Here is your Order Reference: #'.$this->payment_ref. '.')
                    ->line('Thank you for your order!');

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
