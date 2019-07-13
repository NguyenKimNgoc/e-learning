<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 28-Apr-19
 * Time: 11:03 PM
 */

namespace App\Reponsitories\News_in_course;


use App\Model\New_in_course;
use App\Reponsitories\BaseRepository;
use Illuminate\Support\Facades\Auth;
class NewInCourseRepositories extends BaseRepository
{
    public function getModel()
    {
        return New_in_course::class;
    }
    public function getListNews(){
        return $this->model
            ->leftJoin('l_courses','l_news_in_course.course_id','=','l_courses.id')
            ->leftJoin('l_category','l_news_in_course.cate_id','=','l_category.id')
            ->leftJoin('l_category_group','l_news_in_course.cate_group_id','=','l_category_group.id')
            ->leftJoin('l_users','l_news_in_course.author_id','=','l_users.id')
            ->where('l_news_in_course.delete_flag',0)
            ->where('l_news_in_course.author_id',Auth::user()->id)
            ->select('l_news_in_course.*','l_courses.c_title','l_category_group.name as cateGroupName','l_category.cate_name','l_users.full_name as username','l_users.email')
            ->orderBy('id','desc')
            ->paginate(15);
    }
    public function getListNewsAdmin(){
        return $this->model
            ->leftJoin('l_courses','l_news_in_course.course_id','=','l_courses.id')
            ->leftJoin('l_category','l_news_in_course.cate_id','=','l_category.id')
            ->leftJoin('l_category_group','l_news_in_course.cate_group_id','=','l_category_group.id')
            ->leftJoin('l_users','l_news_in_course.author_id','=','l_users.id')
            ->where('l_news_in_course.delete_flag',0)
            ->select('l_news_in_course.*','l_courses.c_title','l_category_group.name as cateGroupName','l_category.cate_name','l_users.full_name as username','l_users.email')
            ->orderBy('id','desc')
            ->paginate(15);
    }
    public function getEditNews($id){
        return $this->model
            ->leftJoin('l_courses','l_news_in_course.course_id','=','l_courses.id')
            ->leftJoin('l_category','l_news_in_course.cate_id','=','l_category.id')
            ->leftJoin('l_category_group','l_news_in_course.cate_group_id','=','l_category_group.id')
            ->leftJoin('l_users','l_news_in_course.author_id','=','l_users.id')
            ->where('l_news_in_course.id',$id)
            ->where('l_news_in_course.delete_flag',0)
            ->select('l_news_in_course.*','l_courses.c_title','l_users.full_name','l_category.cate_name','l_category_group.name as cateGroupName')
            ->first();
    }
    public function getListNewsInCourse($id){
        return $this->model
                ->where('l_news_in_course.course_id',$id)
                ->where('l_news_in_course.status',1)
                ->where('l_news_in_course.delete_flag',0)
                ->get();
    }
    public function getFindNews($id){
        return $this->model
            ->leftJoin('l_users','l_users.id','=','l_news_in_course.author_id')
            ->leftJoin('l_category','l_category.id','=','l_news_in_course.cate_id')
            ->leftJoin('l_category_group','l_category_group.id','=','l_category.cate_group_id')
            ->where('l_news_in_course.id',$id)
            ->where('l_news_in_course.status',1)
            ->where('l_news_in_course.delete_flag',0)
            ->select('l_news_in_course.*','l_users.full_name','l_users.slug_user','l_users.id as idUser','l_category.cate_name','l_category.slug_cate','l_category_group.slug_cate_group')
            ->first();
    }
    public function searchNews($searchNews){
        return $this->model
            ->leftJoin('l_courses','l_news_in_course.course_id','=','l_courses.id')
            ->leftJoin('l_category','l_news_in_course.cate_id','=','l_category.id')
            ->leftJoin('l_category_group','l_news_in_course.cate_group_id','=','l_category_group.id')
            ->leftJoin('l_users','l_news_in_course.author_id','=','l_users.id')
            ->leftJoin('l_news_tags','l_news_tags.news_id','=','l_news_in_course.id')
            ->leftJoin('l_tags','l_news_tags.tag_id','=','l_tags.id')
            ->where(function($query) use ($searchNews) {
                /** @var $query Illuminate\Database\Query\Builder  */
                $query->where('l_news_in_course.news_name', 'like', '%' . $searchNews . '%')
                    ->orWhere('l_users.full_name', 'like', '%' . $searchNews . '%')
                    ->orWhere('l_category.cate_name', 'like', '%' . $searchNews . '%')
                    ->orWhere('l_category_group.name', 'like', '%' . $searchNews . '%')
                    ->orWhere('l_tags.name', 'like', '%' . $searchNews . '%');
            })
            ->where('l_news_in_course.author_id',Auth::user()->id)
            ->where('l_news_in_course.delete_flag',0)
            ->select('l_news_in_course.*','l_courses.c_title','l_category_group.name as cateGroupName','l_category.cate_name','l_users.full_name as username','l_users.email')
            ->orderBy('id','desc')
            ->distinct('l_tags.news_id')
            ->paginate(15);
    }

}