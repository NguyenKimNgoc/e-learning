<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 20-Apr-19
 * Time: 5:38 PM
 */

namespace App\Reponsitories\Industries;

use App\Reponsitories\BaseRepository;
use App\Model\Industries;
class IndustriesReponsitory extends  BaseRepository
{

    public function getModel()
    {
        return Industries::class;
    }

}