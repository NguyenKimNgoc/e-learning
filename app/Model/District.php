<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 23-May-19
 * Time: 10:05 PM
 */

namespace App\Model;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
class District extends Model
{
    use Notifiable;

    protected $table = 'l_district';

    protected $guarded = array();

}