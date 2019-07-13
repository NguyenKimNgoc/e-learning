<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 01-May-19
 * Time: 9:23 PM
 */

namespace App\Model;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
class NewsTags extends Model
{
    use Notifiable;

    protected $table = 'l_news_tags';

    protected $guarded = array();
}