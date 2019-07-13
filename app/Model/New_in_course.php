<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 28-Apr-19
 * Time: 11:01 PM
 */

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
class New_in_course extends Model
{
    use Notifiable;

    protected $table = 'l_news_in_course';

    protected $guarded = array();
}