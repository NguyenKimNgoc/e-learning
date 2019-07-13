<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 05-Mar-19
 * Time: 7:55 PM
 */

namespace App\Http\Controllers\Frontend;


use App\Http\Controllers\Controller;
use App\Http\Requests\Request;
use App\Reponsitories\Banner\BannerRepositories;
use App\Reponsitories\Categories\CategoriesReponsitories;
use App\Reponsitories\CategoriesGroup\CategoriesGroupReponsitories;
use App\Reponsitories\Comments\CommentsReponsitories;
use App\Reponsitories\Courses\CoursesRepositories;
use App\Reponsitories\News_in_course\NewInCourseRepositories;
use App\Reponsitories\Orders\OrdersReponsitories;
use App\Reponsitories\OrderSave\OrderSaveReponsitories;
use App\Reponsitories\Users\UsersRepository;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Yoeunes\Toastr\Toastr;

class ProductController extends Controller
{
    public function __construct(
        CoursesRepositories $courses,
        OrdersReponsitories $orders,
        CategoriesGroupReponsitories $cateGroup,
        CategoriesReponsitories $cate,
        NewInCourseRepositories $news,
        BannerRepositories $banner,
        CommentsReponsitories $comments,
        UsersRepository $users,
        OrderSaveReponsitories $orderSave
    )
    {
        $this->courses = $courses;
        $this->orders = $orders;
        $this->cateGroup = $cateGroup;
        $this->cate= $cate;
        $this->news= $news;
        $this->banner= $banner;
        $this->comments= $comments;
        $this->users= $users;
        $this->orderSave= $orderSave;
    }

    public function detail($id){
        if(!empty(Auth::guard('l_customers')->user()->id)){
            $listNewsInCourse = $this->news->getListNewsInCourse($id);
            $getCourseDetail = $this->courses->getShowCourse($id);
            $listComment = $this->comments->getCommentCourse($id);
            $listCourseOrders = $this->courses->getListCourseByCateGroupByID($getCourseDetail->c_type_course,$id);
            $checkCourseInCustomer = $this->orders->checkCourseInCustomer($id,Auth::guard('l_customers')->user()->id);
           return view('Frontend.product-detail',compact('listComment','checkCourseInCustomer','listNewsInCourse','getCourseDetail','listCourseOrders'));
        }
        $listComment = $this->comments->getCommentCourse($id);
        $listNewsInCourse = $this->news->getListNewsInCourse($id);
        $getCourseDetail = $this->courses->getShowCourse($id);
        $listCourseOrders = $this->courses->getListCourseByCateGroupByID($getCourseDetail->c_type_course,$id);
        return view('Frontend.product-detail',compact('listComment','listNewsInCourse','getCourseDetail','listCourseOrders'));
    }
    public function index(){
        $listCourse = $this->courses->getListCourseAll();
        $listCourseOrders = $this->orderSave->getListCourseOrders();
        return view('Frontend.course-list',compact('listCourse','listCourseOrders'));
    }
    public function course_list($slug_cate_group){
        $listCourseByCateGroup =  $this->courses->getListCourseByCateGroup($slug_cate_group);
        $listCourseOrders = $this->courses->getListCourseByCateGroupAll($slug_cate_group);
        $cate_group = $this->cateGroup->findBy('slug_cate_group',$slug_cate_group);
        return view('Frontend.course-list-by-cate-group',compact('cate_group','listCourseByCateGroup','listCourseOrders'));
    }
    public function courseCateList($slug_cate_group ,$slug_cate){
        $cate_group = $this->cateGroup->findBy('slug_cate_group',$slug_cate_group);
        $cate = $this->cate->findBy('slug_cate',$slug_cate);
        $listCourseByCate =  $this->courses->getListCourseByCate($slug_cate_group,$slug_cate);
        $listCourseOrders = $this->courses->getListCourseByCateGroupByCate($slug_cate_group,$slug_cate);
        return view('Frontend.course-list-by-cate',compact('cate','cate_group','listCourseByCate','listCourseOrders'));
    }
    public function courseNews(){

        $listCourseOrders = $this->orderSave->getListCourseOrders();
        $listCourseNew = $this->courses->getListCourseNew();
        return view('Frontend.course-list-news',compact('listCourseNew','listCourseOrders'));
    }
    public function courseSales(){
        $listCourseOrders = $this->orderSave->getListCourseOrders();
        $listCourseSales = $this->courses->getListCourseSale();
        return view('Frontend.course-list-sale',compact('listCourseSales','listCourseOrders'));
    }
    public function newsInCOurse($id){
        $newsinCousre = $this->news->findBy('id',$id);
        $course = $this->courses->findBy('id',$newsinCousre->course_id);
        $listCourseOrders = $this->courses->getListCourseByCateGroupByID($course->c_type_course,$course->id);
        $getNewsFind = $this->news->getFindNews($id);
        $countCustomersPayment = $this->orders->getCountConditions(['course_id'=>$course->id]);
        $listNewsInCourse =$this->news->getListNewsInCourse($course->id);
        $Banner = $this->banner->getBanner();
        return view('Frontend.news-detail',compact('countCustomersPayment','Banner','course','listCourseOrders','listNewsInCourse','getNewsFind'));
    }
    public function listHistory(){
        if(\Auth::guard('l_customers')->check()){
            $listHistory = $this->orders->listHistoryCustomer(\Auth::guard('l_customers')->user()->id);
            return view('Frontend.historyCustomerOrder',compact('listHistory'));
        }
    }

    public function searchHistory(Request $request){
        $listHistory = $this->orders->searchHistoryOrder(\Auth::guard('l_customers')->user()->id,$request->searchHis);
        return view('Frontend.historyCustomerOrder',compact('listHistory'));
    }

    public function postCommentCourse(Request $request){
        $addComment = [
                'content'=>$request->comment,
                'author_id'=>Auth::guard('l_customers')->user()->id,
                'course_id'=>$request->course_id,
        ];
        if($request->comment){
            $course = $this->courses->findBy('id',$request->course_id);
            $users = $this->users->findBy('id',$course->c_author_id);
            $this->comments->create($addComment);
                 Mail::to($users->email)->send(new \App\Mail\sendMailComments($course->c_title,$request->comment,Auth::guard('l_customers')->user()->full_name));
            Toastr()->success('Thêm bình luận thành công');
            return redirect()->back();
        }
    }

    public function hiddenComment(Request $request ,$id){
        $this->comments->destroy($id);
        Toastr()->success('Xóa bình luận thành công');
        return redirect()->back();
    }

}