<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
class ContactsConfig extends Model
{
    use Notifiable;

    protected $table = 'l_contacts_config';

    protected $guarded = array();
}
