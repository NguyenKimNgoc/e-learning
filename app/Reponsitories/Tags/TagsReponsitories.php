<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 29-Apr-19
 * Time: 9:04 AM
 */

namespace App\Reponsitories\Tags;


use App\Model\Tags;
use App\Reponsitories\BaseRepository;

class TagsReponsitories extends BaseRepository
{
    public function getModel()
    {
        return Tags::class;
    }
}