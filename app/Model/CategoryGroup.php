<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
class CategoryGroup extends Model
{
    use Notifiable;

    protected $table = 'l_category_group';

    protected $guarded = array();
}
