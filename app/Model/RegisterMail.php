<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 01-Jun-19
 * Time: 2:59 PM
 */

namespace App\Model;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
class RegisterMail extends Model
{
    use Notifiable;

    protected $table = 'l_register_mail';

    protected $guarded = array();
}