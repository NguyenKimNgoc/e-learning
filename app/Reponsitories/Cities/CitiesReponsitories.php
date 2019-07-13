<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 10-May-19
 * Time: 10:29 PM
 */

namespace App\Reponsitories\Cities;


use App\Model\Cities;
use App\Reponsitories\BaseRepository;

class CitiesReponsitories extends BaseRepository
{
    public function getModel()
    {
        return Cities::class;
    }

}