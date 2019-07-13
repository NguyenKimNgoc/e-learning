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
use App\Model\RegisterMail;
use App\Reponsitories\Categories\CategoriesReponsitories;
use App\Reponsitories\CategoriesGroup\CategoriesGroupReponsitories;
use App\Reponsitories\Courses\CoursesRepositories;
use App\Reponsitories\Orders\OrdersReponsitories;
use App\Reponsitories\OrderSave\OrderSaveReponsitories;
use App\Reponsitories\RegisterMail\RegisterMailReponsitories;
use Yoeunes\Toastr\Toastr;

class HomePageController extends Controller
{
    public function __construct(
        CategoriesGroupReponsitories $categoriesGroup,
        CategoriesReponsitories $category,
        CoursesRepositories $courses,
        OrdersReponsitories $orders,
        RegisterMailReponsitories $registerMail,
        OrderSaveReponsitories $orderSave
    ){
        $this->categoriesGroup = $categoriesGroup;
        $this->category = $category;
        $this->courses = $courses;
        $this->orders = $orders;
        $this->registerMail = $registerMail;
        $this->orderSave = $orderSave;
    }
    public function HomePage(){
        $listCateGroup = $this->categoriesGroup->all('id asc');
        $listCate = $this->category->all('id asc');
        $listCourseNew = $this->courses->getListCourseNewIndex();
        $listCourseSale = $this->courses->getListCourseSaleIndex();
        $listCourse = $this->courses->getListCourseAllIndex();
        $listCourseOrders = $this->orderSave->getListCourseOrders();
        return view('Frontend.index',compact('listCateGroup','listCate','listCourse','listCourseNew','listCourseSale','listCourseOrders'));
    }
    public function registerMail(Request $request){
        $checkRegisMail = $this->registerMail->findBy('email',$request->email);
        $createMail = [
            'email'=>$request->email
        ];
        if($checkRegisMail == null){
            $this->registerMail->create($createMail);
            Toastr()->success('Bạn đã đang ký mail thành công ');
            return redirect()->back();
        }else{
            Toastr()->warning('Bạn đã đang ký mail này rồi');
            return redirect()->back();
        }
    }

    public function search(Request $request){
        $listCourseOrders = $this->orderSave->getListCourseOrders();
        $listCourse = $this->courses->searchCourseFrontend($request->searchName);
        return view('Frontend.search',compact('listCourse','listCourseOrders'));
    }
}