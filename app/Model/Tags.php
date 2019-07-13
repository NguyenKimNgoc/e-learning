<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
class Tags extends Model
{

    use Notifiable;

    protected $table = 'l_tags';

    protected $guarded = array();
}
