<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 28-Apr-19
 * Time: 12:12 AM
 */

namespace App\Reponsitories\Courses;


use App\Model\Courses;
use App\Reponsitories\BaseRepository;
use Illuminate\Support\Facades\Auth;
use DB;
class CoursesRepositories extends BaseRepository
{
    public function getModel()
    {
        return Courses::class;
    }
    public function getListCourseAllIndex(){
        return $this->model
            ->leftJoin('l_category_group','l_courses.c_type_course','=','l_category_group.id')
            ->leftJoin('l_news_in_course','l_news_in_course.course_id','=','l_courses.id')
            ->leftJoin('l_users','l_courses.c_author_id','l_users.id')
            ->where('l_courses.delete_flag',0)
            ->where('l_courses.status',1)
            ->select('l_courses.*','l_category_group.name as type_course','l_users.id as user_id','l_users.full_name','l_users.avatar','l_users.slug_user')
            ->orderBy('id','desc')
            ->paginate(6);
    }
    public function getListCourseAll(){
        return $this->model
            ->leftJoin('l_category_group','l_courses.c_type_course','=','l_category_group.id')
            ->leftJoin('l_users','l_courses.c_author_id','l_users.id')
            ->where('l_courses.delete_flag',0)
            ->where('l_courses.status',1)
            ->select('l_courses.*','l_category_group.name as type_course','l_users.id as user_id','l_users.full_name','l_users.avatar','l_users.slug_user')
            ->orderBy('id','desc')
            ->paginate(12);
    }
    public function getListCourseByCateGroup($cate_group){
        return $this->model
            ->leftJoin('l_category_group','l_courses.c_type_course','=','l_category_group.id')
            ->leftJoin('l_users','l_courses.c_author_id','l_users.id')
            ->where('l_courses.delete_flag',0)
            ->where('l_courses.status',1)
            ->where('l_category_group.slug_cate_group',$cate_group)
            ->select('l_courses.*','l_category_group.name as type_course','l_users.id as user_id','l_users.full_name','l_users.avatar','l_users.slug_user')
            ->orderBy('id','desc')
            ->paginate(12);
    }
    public function getListCourseByCate($cate_group,$cate){
        return $this->model
            ->leftJoin('l_category_group','l_courses.c_type_course','=','l_category_group.id')
            ->leftJoin('l_category','l_courses.cate_id','=','l_category.id')
            ->leftJoin('l_users','l_courses.c_author_id','l_users.id')
            ->where('l_courses.delete_flag',0)
            ->where('l_category_group.slug_cate_group',$cate_group)
            ->where('l_category.slug_cate',$cate)
            ->where('l_courses.status',1)
            ->select('l_courses.*','l_category_group.name as type_course','l_users.id as user_id','l_users.full_name','l_users.avatar','l_users.slug_user')
            ->orderBy('id','desc')
            ->paginate(12);
    }
    public function getListCourse(){
        return $this->model
            ->leftJoin('l_category_group','l_courses.c_type_course','=','l_category_group.id')
            ->where('l_courses.delete_flag',0)
            ->where('l_courses.c_author_id',Auth::user()->id)
            ->where('l_courses.delete_flag',0)
            ->select('l_courses.*','l_category_group.name as type_course')
            ->orderBy('id','desc')
            ->paginate(20);
    }
    public function getListCourseAdmin(){
        return $this->model
            ->leftJoin('l_category_group','l_courses.c_type_course','=','l_category_group.id')
            ->leftJoin('l_users','l_courses.c_author_id','l_users.id')
            ->where('l_courses.delete_flag',0)
            ->select('l_courses.*','l_category_group.name as type_course','l_users.email','l_users.full_name')
            ->orderBy('id','desc')
            ->paginate(20);
    }
    public function getListCourseById($id){
        return $this->model
            ->leftJoin('l_category_group','l_courses.c_type_course','=','l_category_group.id')
            ->leftJoin('l_users','l_courses.c_author_id','l_users.id')
            ->where('l_courses.delete_flag',0)
            ->where('l_courses.c_author_id',$id)
            ->where('l_courses.status',1)
            ->select('l_courses.*','l_category_group.name as type_course','l_users.email','l_users.full_name')
            ->orderBy('id','desc')
            ->paginate(20);
    }
    public function getShowCourseAdmin($id){
        return $this->model
            ->leftJoin('l_category_group','l_courses.c_type_course','=','l_category_group.id')
            ->leftJoin('l_users','l_courses.c_author_id','=','l_users.id')
            ->where('l_courses.id',$id)
            ->select('l_courses.*','l_category_group.slug_cate_group','l_category_group.name as type_course','l_users.full_name','l_users.id as user_id','l_users.slug_user')
            ->first();
    }
//    Frontend
    public function getShowCourse($id){
        return $this->model
            ->leftJoin('l_category_group','l_courses.c_type_course','=','l_category_group.id')
            ->leftJoin('l_users','l_courses.c_author_id','=','l_users.id')
            ->where('l_courses.id',$id)
            ->where('l_courses.status',1)
            ->select('l_courses.*','l_category_group.slug_cate_group','l_category_group.name as type_course','l_users.full_name','l_users.id as user_id','l_users.slug_user')
            ->first();
    }
    public function getListCourseNew(){
        return $this->model
            ->leftJoin('l_users','l_courses.c_author_id','l_users.id')
            ->where('l_courses.delete_flag',0)
            ->where('l_courses.c_hot',1)
            ->where('l_courses.status',1)
            ->select('l_courses.*','l_users.id as user_id','l_users.full_name','l_users.avatar','l_users.slug_user')
            ->orderBy('l_courses.id','desc')
            ->paginate(12);
    }
    public function getListCourseSale(){
        return $this->model
            ->leftJoin('l_users','l_courses.c_author_id','l_users.id')
            ->where('l_courses.delete_flag',0)
            ->where('l_courses.c_hot',2)
            ->where('l_courses.status',1)
            ->select('l_courses.*','l_users.id as user_id','l_users.full_name','l_users.avatar','l_users.id as user_id','l_users.slug_user')
            ->orderBy('l_courses.id','desc')
            ->paginate(12);
    }
    public function getListCourseNewIndex(){
        return $this->model
            ->leftJoin('l_users','l_courses.c_author_id','l_users.id')
            ->where('l_courses.delete_flag',0)
            ->where('l_courses.c_hot',1)
            ->where('l_courses.status',1)
            ->select('l_courses.*','l_users.id as user_id','l_users.full_name','l_users.avatar','l_users.slug_user')
            ->orderBy('l_courses.id','desc')
            ->paginate(6);
    }
    public function getListCourseSaleIndex(){
        return $this->model
            ->leftJoin('l_users','l_courses.c_author_id','l_users.id')
            ->where('l_courses.delete_flag',0)
            ->where('l_courses.c_hot',2)
            ->where('l_courses.status',1)
            ->select('l_courses.*','l_users.id as user_id','l_users.full_name','l_users.avatar','l_users.id as user_id','l_users.slug_user')
            ->orderBy('l_courses.id','desc')
            ->paginate(6);
    }
    public function getListCourseAuthor($id){
        return $this->model
            ->leftJoin('l_users','l_courses.c_author_id','l_users.id')
            ->where('l_courses.delete_flag',0)
            ->where('l_courses.c_author_id',$id)
            ->where('l_courses.status',1)
            ->select('l_courses.*','l_users.id as user_id','l_users.full_name','l_users.avatar')
            ->paginate(12);
    }

    public function getListCourseByCateGroupByID($cate_group,$id){
        return $this->model
            ->leftJoin('l_category_group','l_courses.c_type_course','=','l_category_group.id')
            ->leftJoin('l_users','l_courses.c_author_id','l_users.id')
            ->where('l_courses.delete_flag',0)
            ->where('l_courses.status',1)
            ->where('l_category_group.id',$cate_group)
            ->where('l_courses.id','<>' ,$id)
            ->select('l_courses.*','l_category_group.name as type_course','l_users.id as user_id','l_users.full_name','l_users.avatar','l_users.slug_user')
            ->orderBy('id','desc')
            ->get();
    }
    public function getListCourseByCateGroupAll($cate_group){
        return $this->model
            ->leftJoin('l_category_group','l_courses.c_type_course','=','l_category_group.id')
            ->leftJoin('l_users','l_courses.c_author_id','l_users.id')
            ->where('l_courses.delete_flag',0)
            ->where('l_courses.status',1)
            ->where('l_category_group.slug_cate_group',$cate_group)
            ->select('l_courses.*','l_category_group.name as type_course','l_users.id as user_id','l_users.full_name','l_users.avatar','l_users.slug_user')
            ->orderBy('id','desc')
            ->get();
    }
    public function getListCourseByCateGroupByCate($cate_group,$slug_cate){
        return $this->model
            ->leftJoin('l_category_group','l_courses.c_type_course','=','l_category_group.id')
            ->leftJoin('l_category','l_category.cate_group_id','=','l_category.id')
            ->leftJoin('l_users','l_courses.c_author_id','l_users.id')
            ->where('l_courses.delete_flag',0)
            ->where('l_courses.status',1)
            ->where('l_category_group.slug_cate_group',$cate_group)
            ->where('l_category.slug_cate',$slug_cate)
            ->select('l_courses.*','l_category_group.name as type_course','l_users.id as user_id','l_users.full_name','l_users.avatar','l_users.slug_user')
            ->orderBy('id','desc')
            ->get();
    }
    public function getCourseSendMail($id){
        return $this->model
                ->leftJoin('l_users','l_users.id','=','l_courses.c_author_id')
                ->leftJoin('l_category_group','l_category_group.id','=','l_courses.c_type_course')
                ->where('l_courses.id',$id)
                ->select('l_courses.*','l_users.full_name','l_category_group.name as catenamegroup')
                ->first();
    }
    public function searchCourse($searchCourse,$id){
        return $this->model
            ->leftJoin('l_category_group','l_courses.c_type_course','=','l_category_group.id')
            ->leftJoin('l_users','l_courses.c_author_id','l_users.id')
            ->where('l_courses.delete_flag',0)
            ->where(function($query) use ($searchCourse,$id) {
                /** @var $query Illuminate\Database\Query\Builder  */
                $query->where('l_courses.c_title', 'like', '%' . $searchCourse . '%')
                    ->orWhere('l_category_group.name', 'like', '%' . $searchCourse . '%')
                    ->orWhere('l_courses.c_price', 'like', '%' . $searchCourse . '%')
                    ->orWhere('l_courses.c_price_sale', 'like', '%' . $searchCourse . '%');
            })
            ->where('l_courses.c_author_id',$id)
            ->select('l_courses.*','l_category_group.name as type_course','l_users.email','l_users.full_name')
            ->orderBy('id','desc')
            ->paginate(20);

    }

    public function searchCourseFrontend($search){
        return $this->model
            ->leftJoin('l_category_group','l_courses.c_type_course','=','l_category_group.id')
            ->leftJoin('l_category','l_courses.cate_id','=','l_category.id')
            ->leftJoin('l_users','l_courses.c_author_id','l_users.id')
            ->where(function($query) use ($search) {
                /** @var $query Illuminate\Database\Query\Builder  */
                $query->where('l_courses.c_title', 'like', '%' . $search . '%')
                    ->orWhere('l_category_group.name', 'like', '%' . $search . '%')
                    ->orWhere('l_courses.c_price', 'like', '%' . $search . '%')
                    ->orWhere('l_courses.c_price_sale', 'like', '%' . $search . '%')
                    ->orWhere('l_users.full_name', 'like', '%' . $search . '%')
                    ->orWhere('l_category.cate_name', 'like', '%' . $search . '%');
            })
            ->where('l_courses.delete_flag',0)
            ->where('l_courses.status',1)
            ->select('l_courses.*','l_category_group.name as type_course','l_users.id as user_id','l_users.full_name','l_users.avatar','l_users.slug_user')
            ->orderBy('id','desc')
            ->paginate(12);
    }

    public function getCoursesBy(){
        return $this->model
            ->leftJoin('l_category_group','l_courses.c_type_course','=','l_category_group.id')
            ->where('l_courses.c_author_id',Auth::user()->id)
            ->where('l_courses.delete_flag',0)
            ->select('l_courses.*','l_category_group.name as type_course')
            ->orderBy('id','desc')
            ->get();
    }

    public function onchangeCourse($id){
        return $this->model
            ->leftJoin('l_category_group','l_courses.c_type_course','=','l_category_group.id')
            ->where('l_courses.cate_id',$id)
            ->where('l_courses.delete_flag',0)
            ->select('l_courses.c_title','l_courses.id')
            ->orderBy('id','desc')
            ->get();
    }

}