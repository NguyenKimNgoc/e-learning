<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 20-Apr-19
 * Time: 4:48 PM
 */

namespace App\Model;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Industries extends  Model
{
    use Notifiable;

    protected $table = 'l_user_industries';

    protected $guarded = array();
}