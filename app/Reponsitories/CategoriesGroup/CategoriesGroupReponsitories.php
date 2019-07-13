<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 04-May-19
 * Time: 9:46 PM
 */

namespace App\Reponsitories\CategoriesGroup;


use App\Model\CategoryGroup;
use App\Reponsitories\BaseRepository;

class CategoriesGroupReponsitories extends BaseRepository
{
    public function getModel()
    {
        return CategoryGroup::class;
    }
    public function getListCateGroup(){
        return $this->model
            ->where('l_category_group.delete_flag',0)
            ->select('l_category_group.*')
            ->orderBy('id','desc')
            ->paginate(20);
    }
    public function getCateGroup(){
        return $this->model
            ->where('l_category_group.delete_flag',0)
            ->orderBy('id','desc')
            ->select('l_category_group.*')
            ->get();
    }
}