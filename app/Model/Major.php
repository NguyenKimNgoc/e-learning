<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 20-Apr-19
 * Time: 5:18 PM
 */

namespace App\Model;
use Illuminate\Database\Eloquent\Model;
use  Illuminate\Notifications\Notifiable;

class Major extends Model
{
    use Notifiable;

    protected $table = 'l_user_major';

    protected $guarded = array();
}