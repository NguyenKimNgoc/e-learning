<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 23-May-19
 * Time: 10:04 PM
 */

namespace App\Reponsitories\Districts;


use App\Model\District;
use App\Reponsitories\BaseRepository;

class DistrictReponsitories extends BaseRepository
{
    public function getModel()
    {
        return District::class;
    }

    public function listDistrictById($id){
        return $this->model->where('parent_id',$id)->get();
    }
}