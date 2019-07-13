<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 04-May-19
 * Time: 9:46 PM
 */

namespace App\Reponsitories\Categories;


use App\Model\Category;
use App\Reponsitories\BaseRepository;

class CategoriesReponsitories extends BaseRepository
{
    public function getModel()
    {
        return Category::class;
    }
    public function getListCategory(){
        return $this->model
            ->leftJoin('l_category_group','l_category_group.id','l_category.cate_group_id')
            ->where('l_category.delete_flag',0)
            ->select('l_category.*','l_category_group.name')
            ->orderBy('id','desc')
            ->paginate(20);
    }
    public function getCate(){
        return $this->model
            ->where('l_category.delete_flag',0)
            ->orderBy('id',' asc')
            ->get();
    }
    public function getCateById($id){
        return $this->model
            ->where('l_category.delete_flag',0)
            ->where('l_category.cate_group_id',$id)
            ->orderBy('id',' asc')
            ->get();
    }
}