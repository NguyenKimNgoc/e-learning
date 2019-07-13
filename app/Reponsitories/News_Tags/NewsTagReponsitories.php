<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 01-May-19
 * Time: 9:22 PM
 */

namespace App\Reponsitories\News_Tags;


use App\Model\NewsTags;
use App\Reponsitories\BaseRepository;

class NewsTagReponsitories extends BaseRepository
{
    public function getModel()
    {
        return NewsTags::class;
    }
    public function getListTag($id){
        return $this->model
            ->leftJoin('l_tags','l_news_tags.tag_id','=','l_tags.id')
            ->where('l_news_tags.news_id',$id)
            ->select('l_news_tags.tag_id','l_tags.name as tag_name')
            ->get();
    }
    public function listTag(){
        return $this->model
            ->leftJoin('l_tags','l_news_tags.tag_id','=','l_tags.id')
            ->select('l_news_tags.tag_id','l_news_tags.news_id','l_tags.name as tag_name')
            ->get();
    }
}