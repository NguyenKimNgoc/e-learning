<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 20-Apr-19
 * Time: 5:40 PM
 */

namespace App\Reponsitories\Major;
use App\Reponsitories\BaseRepository;
use App\Model\Major;

class MajorRepository extends  BaseRepository
{
    public function getModel()
    {
        return Major::class;
    }
}