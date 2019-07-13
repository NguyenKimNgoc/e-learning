<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
class Orders extends Model
{
    use Notifiable;

    protected $table = 'l_orders';

    protected $guarded = array();
}
