<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 16-Jun-19
 * Time: 3:52 PM
 */

namespace App\Reponsitories\BlogTags;


use App\Model\BlogTags;
use App\Reponsitories\BaseRepository;

class BlogTagsReponsitories extends BaseRepository
{
    public function getModel()
    {
        return BlogTags::class;
    }

    public function getTagsBlog(){
        return $this->model
                ->leftJoin('l_tags','l_blog_tags.blog_tags','l_tags.id')
                ->where('deleted_flag',0)
                ->select('l_tags.name as tag_name','l_blog_tags.*')
                ->get();
    }
}