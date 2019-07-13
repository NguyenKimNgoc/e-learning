<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class BannerType extends Model
{
    use Notifiable;

    protected $table = 'l_banner_type';

    protected $guarded = array();
}
