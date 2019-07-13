<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class UserGroup extends Model
{
    use Notifiable;

    protected $table = 'l_user_group';

    protected $guarded = array();
}
