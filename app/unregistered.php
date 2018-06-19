<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class unregistered extends Model
{
    use Notifiable;

    public function routeNotificationForNexmo()
    {
        return $this->user_phone_number;
    }
}
