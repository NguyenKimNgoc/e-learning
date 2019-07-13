<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Cities extends Model
{
    use Notifiable;

    protected $table = 'l_cities';

    protected $guarded = array();
}
