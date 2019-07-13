<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 16-Jun-19
 * Time: 3:50 PM
 */

namespace App\Model;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
class Blog extends Model
{
    use Notifiable;

    protected $table = 'l_blogs';

    protected $guarded = array();
}