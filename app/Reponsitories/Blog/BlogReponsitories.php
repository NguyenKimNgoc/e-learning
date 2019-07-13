<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 16-Jun-19
 * Time: 3:49 PM
 */

namespace App\Reponsitories\Blog;


use App\Model\Blog;
use App\Reponsitories\BaseRepository;

class BlogReponsitories extends BaseRepository
{
    public function getModel()
    {
        return Blog::class;
    }

    public function getBlog(){
        return $this->model
                ->leftJoin('l_users','l_blogs.author_id','=','l_users.id')
                ->leftJoin('l_category_group','l_blogs.cate_group_id','=','l_category_group.id')
                ->where('l_blogs.deleted_flag',0)
                ->select('l_blogs.*','l_users.full_name','l_category_group.name','l_users.avatar','l_users.id as user_id','l_users.slug_user')
                ->orderBy('l_blogs.id','desc')
                ->paginate(20);
    }
    public function getEditBlog($id){
        return $this->model
            ->leftJoin('l_users','l_blogs.author_id','=','l_users.id')
            ->leftJoin('l_category_group','l_blogs.cate_group_id','=','l_category_group.id')
            ->where('l_blogs.id',$id)
            ->where('l_blogs.deleted_flag',0)
            ->select('l_blogs.*','l_users.full_name','l_category_group.name','l_users.avatar','l_users.id as user_id','l_users.slug_user')
            ->first();
    }
}