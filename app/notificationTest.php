<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;


class notificationTest extends Model
{
     use Notifiable;

     protected $table = 'notification_test';

     protected $primaryKey = 'buyer_phone_number';

      protected $fillable = 
      [
         'buyer_phone_number', 'buyer_name',
      ];


    public function routeNotificationForNexmo()
    {
        return $this->buyer_phone_number;
    }
}
