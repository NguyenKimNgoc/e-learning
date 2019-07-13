<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Banner extends Model
{
    use Notifiable;

    protected $table = 'l_banner';

    protected $guarded = array();
}
