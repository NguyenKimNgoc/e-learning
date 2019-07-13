<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 17-Jun-19
 * Time: 11:41 PM
 */

namespace App\Model;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
class OrderSave extends Model
{
    use Notifiable;

    protected $table = 'l_orders_save';

    protected $guarded = array();
}