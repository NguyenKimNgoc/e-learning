<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 16-Jun-19
 * Time: 3:51 PM
 */

namespace App\Model;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
class BlogTags extends Model
{
    use Notifiable;

    protected $table = 'l_blog_tags';

    protected $guarded = array();

}