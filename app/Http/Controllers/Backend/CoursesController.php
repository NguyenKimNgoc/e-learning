<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 28-Apr-19
 * Time: 12:14 AM
 */

namespace App\Http\Controllers\Backend;


use App\Helpers\Helpers;
use App\Http\Controllers\Controller;
use App\Http\Requests\ChangeStatusRequest;
use App\Http\Requests\CoursesRequest;
use App\Http\Requests\Request;
use App\Mail\sendMailToCustomers;
use App\Mail\sendMailToRegister;
use App\Reponsitories\Categories\CategoriesReponsitories;
use App\Reponsitories\CategoriesGroup\CategoriesGroupReponsitories;
use App\Reponsitories\Courses\CoursesRepositories;
use App\Reponsitories\Customers\CustomersReponsitories;
use App\Reponsitories\News_in_course\NewInCourseRepositories;
use App\Reponsitories\RegisterMail\RegisterMailReponsitories;
use App\Reponsitories\Users\UsersRepository;
use App\Upload;
use Illuminate\Support\Facades\Auth;
use File;
use Illuminate\Support\Facades\DB;
use Mail;

class CoursesController extends Controller
{
    public function __construct(
        CategoriesGroupReponsitories $cateGroup,
        CoursesRepositories $courses,
        CategoriesReponsitories $cate,
        CustomersReponsitories $customers,
        RegisterMailReponsitories $registerMail,
        UsersRepository $users,
        NewInCourseRepositories $news
    ){
        $this->cateGroup = $cateGroup;
        $this->courses = $courses;
        $this->cate = $cate;
        $this->customers = $customers;
        $this->registerMail = $registerMail;
        $this->news = $news;
    }
    public function index(){
        if(Auth::user()->user_group == 1){
            $listCourseAdmin = $this->courses->getListCourseAdmin();
            $countCustomer = $this->customers->getCountConditions();
            $countRegister = $this->registerMail->getCountConditions();
            return view('Backend.Courses.course-list-admin',compact('listCourseAdmin','countCustomer','countRegister'));
        }elseif(Auth::user()->user_group == 3){
            $listCourse = $this->courses->getListCourse();
            return view('Backend.Courses.course-list',compact('listCourse'));
        }

    }
    public function changeSatus(ChangeStatusRequest $request,$id){
        $status=[
            'status'=>1
        ];
        $this->courses->update($status,$id);
//        send mail active
        $c_title = $request->c_title;
        $route = $request->route;
        $full_name = $request->full_name;
        \Mail::to($request->email)->send(new \App\Mail\MailChangeStatus($c_title,$route,$full_name));
        toastr()->success('Cập nhật trạng thái thành công!');
        return redirect()->route('course-list');
    }
    public function create()
    {
        if (Auth::user()->user_group == 3 || Auth::user()->user_group == 1) {
            $listCateGroup = $this->cateGroup->all('id asc');
            $listCate = $this->cate->getCate();
            return view('Backend.Courses.course-add', compact('listCateGroup', 'listCate'));
        }else{
            Toastr()->warning('Bạn không có quyền thêm khóa học');
            return redirect()->back();
        }
    }
    public function store(CoursesRequest $request){
        $addCourse = [
            'c_title' =>$request->c_title,
            'c_type_course' =>$request->c_type_course,
            'cate_id'=>$request->cate_id,
            'c_price'=>$request->c_price,
            'c_price_sale' =>$request->c_price_sale,
            'c_hot'=>$request->c_hot,
            'c_description'=>$request->c_description,
            'c_author_id'=>Auth::user()->id,
            'slug_course' =>Helpers::to_slug($request->c_title)
        ];
        if(Auth::user()->user_group == 1){
                $addCourse['status'] = 1;
            }
        if ($request->hasFile('c_images')) {
            $addCourse['c_images'] = Upload::getImage('c_images', 'upload/courses/images', $request);
        };
        if ($this->courses->create($addCourse)) {
            return redirect()->route('course-list')->with('success', 'Thêm mới thành công ')->withInput();
        } else {
            return redirect()->back()->with('error', 'Thêm mới thất bại')->withInput();
        }
    }
    public function show($id)
    {
        $showCourse = $this->courses->getShowCourseAdmin($id);
        $showNewsInCourse = $this->news->getListNewsInCourse($id);
        return view('Backend.Courses.course-show', compact('showCourse','showNewsInCourse'));
    }

    public function edit($id,$c_author_id){
        if(Auth::user()->id == $c_author_id){
            $listCateGroup = $this->cateGroup->getCateGroup();
            $editCourse = $this->courses->getShowCourse($id);
            $listCate = $this->cate->getCate();
            return view('Backend.Courses.course-edit',compact('editCourse','listCate','listCateGroup'));
        }else{
            Toastr()->warning('Bạn không có quyền chỉnh sửa khóa học này !!!');
            return redirect()->back();
        }

    }
    public function update(CoursesRequest $request,$id)
    {
        $updateCourse = [
            'c_title'=>$request->c_title,
            'c_type_course'=>$request->c_type_course,
            'cate_id'=>$request->cate_id,
            'c_price'=>$request->c_price,
            'c_price_sale'=>$request->c_price_sale,
            'c_hot'=>$request->c_hot,
            'c_description'=>$request->c_description,
            'slug_course' =>Helpers::to_slug($request->c_title)
        ];
        if(Auth::user()->user_group == 1){
            $addCourse['status'] = 1;
        }else{
            $addCourse['status'] = 0;
        }
        if ($request->hasFile('c_images')) {
            $updateCourse['c_images'] = Upload::getImage('c_images', 'upload/courses/images', $request);
        };
        if ($this->courses->update($updateCourse,$id)) {
            return redirect()->route('course-list')->with('success', 'Chỉnh Sửa thành công ')->withInput();
        } else {
            return redirect()->back()->with('error', 'Thêm mới thất bại')->withInput();
        }
    }
    public function destroy($id){
        if(Auth::user()->id == $id){
            try {
                $this->courses->update(['delete_flag'=>1],$id);
                return response()->json(['code' => 200]);
            } catch(\Exception $e) {
                Log::error('Something is really going wrong.' . $e->getMessage() . 'Line' . $e->getLine());
                return response()->json(['code' => 500]);
            }
        }else{
            Toastr()->warning('Bạn không có quyền xóa khóa học này ');
            return redirect()->back();
        }

    }
    public function changeCate(Request $request){
        $id = $request->id;
        $listCate= $this->cate->getCateById($id);
        $cateHTML =  view('Backend.Ajax.cateAjax',compact('listCate'))->render();
        return response()->json( array('success' => true, 'html'=>$cateHTML) );
    }

    public function sendMailToCustomers($id){
        $course = $this->courses->getCourseSendMail($id);
        $urlCourse = route('product-detail',['id'=>$id,'slug_course'=>$course->slug_course]);
        $username = $course->full_name;
        $cate_group = $course->catenamegroup;
        try {
            $path = public_path() . '/cron-config-mail-customer.txt';
            if ( !file_exists($path) ) {
                $page = 1;
            } else {
                $page = (int)File::get($path);
            }
            \File::put($path, $page + 1);
            $offsetCustomer =  ($page - 1) * 20;
            $getCustomerLimitSendMail =  DB::table('l_customers')
                ->orderBy('id', 'asc')
                ->offset($offsetCustomer)
                ->limit(20)
                ->get();
            if ( count($getCustomerLimitSendMail) > 0  ) {
                foreach ( $getCustomerLimitSendMail as $customerSendMail) {
                    Mail::to($customerSendMail->email)->queue(new sendMailToCustomers($course,$urlCourse,$username,$cate_group));
                }
                Toastr()->warning('Bạn đã gửi khách hàng hãy gửi tiếp cho khách hàng còn lại');
                return redirect()->back();
            } else {
               \File::exists($path);
                    //File::delete($image_path);
                    unlink($path);
                    Toastr()->success('Hoàn tất gửi mail cho khách hàng');
                    return redirect()->back();
                // Send mail to admin no data send mail and delete file to send again
            }

        } catch (\Exception $exception) {
            \Log::error($exception->getMessage());
        }
    }
    public function sendMailToRegister($id){
        $course = $this->courses->getCourseSendMail($id);
        $urlCourse = route('product-detail',['id'=>$id,'slug_course'=>$course->slug_course]);
        $username = $course->full_name;
        $cate_group = $course->catenamegroup;
        try {
            $path = public_path() . '/cron-config-mail-register.txt';
            if ( !file_exists($path) ) {
                $page = 1;
            } else {
                $page = (int)File::get($path);
            }
            \File::put($path, $page + 1);
            $offsetRegister =  ($page - 1) * 20;
                $getRegisterLimitSendMail =  DB::table('l_register_mail')
                    ->orderBy('id', 'asc')
                    ->offset($offsetRegister)
                    ->limit(20)
                    ->get();
                if ( count($getRegisterLimitSendMail) > 0  ) {
                    foreach ( $getRegisterLimitSendMail as $registerSendMail) {
                        Mail::to($registerSendMail->email)->queue(new sendMailToRegister($course,$urlCourse,$username,$cate_group));
                    }
                    Toastr()->warning('Bạn đã gửi khách đăng ký hãy gửi tiếp cho khách hàng còn lại');
                    return redirect()->back();
                } else {
                    \File::exists($path);
                    //File::delete($image_path);
                    unlink($path);
                    Toastr()->success('Hoàn tất gửi mail cho khách đăng ký ');
                    return redirect()->back();
                    // Send mail to admin no data send mail and delete file to send again
                }

        } catch (\Exception $exception) {
            \Log::error($exception->getMessage());
        }
    }
    public function search(Request $request){
        if(Auth::user()->user_group == 1){
            $id = Auth::user()->id;
            $listCourseAdmin = $this->courses->searchCourse($request->searchCourse,$id);
            $countCustomer = $this->customers->getCountConditions();
            $countRegister = $this->registerMail->getCountConditions();
            return view('Backend.Courses.course-list-admin',compact('listCourseAdmin','countCustomer','countRegister'));
        }elseif(Auth::user()->user_group == 3){
            $id = Auth::user()->id;
            $listCourse = $this->courses->searchCourse($request->searchCourse,$id);
            return view('Backend.Courses.course-list',compact('listCourse'));
        }
    }
}