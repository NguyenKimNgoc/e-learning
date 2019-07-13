<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
class Contacts extends Model
{
    use Notifiable;

    protected $table = 'l_contacts';

    protected $guarded = array();
}
