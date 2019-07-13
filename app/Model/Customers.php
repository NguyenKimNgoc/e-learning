<?php

namespace App\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Customers extends Authenticatable
{
    use Notifiable;
    protected $guard = 'l_customers';
    protected $table = 'l_customers';

    protected $guarded = array();

}