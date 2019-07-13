<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
class Comments extends Model
{
    use Notifiable;

    protected $table = 'l_comments';

    protected $guarded = array();
}
