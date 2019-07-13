<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 05-May-19
 * Time: 2:15 AM
 */

namespace App\Helpers;


use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
class Helpers
{
    public $users;
    public static function countUser()
    {
        $users = DB::table('l_users')->where('delete_flag',0)->count();

        return $users;
    }
    public static function countNews()
    {
        $news = DB::table('l_news_in_course')
            ->where('delete_flag',0)
            ->where('author_id',Auth::user()->id)
            ->count();
        return $news;
    }
    public static function countNewsIndex()
    {
        $news = DB::table('l_news_in_course')
            ->where('delete_flag',0)
            ->count();
        return $news;
    }
    public static function countContacts()
    {
        $contacts = DB::table('l_contacts')
            ->where('deleted_flag',0)
            ->count();
        return $contacts;
    }
    public static function countNewsAdmin()
    {
        $news = DB::table('l_news_in_course')
            ->where('delete_flag',0)
            ->count();
        return $news;
    }
    public static function countBanner()
    {
        $banner = DB::table('l_banner')->where('delete_flag',0)->count();

        return $banner;
    }
    public static function countCourses()
    {
        $courses = DB::table('l_courses')
            ->where('delete_flag',0)
            ->where('c_author_id',Auth::user()->id)
            ->count();

        return $courses;
    }
    public static function countCoursesIndex()
    {
        $courses = DB::table('l_courses')
            ->where('delete_flag',0)
            ->count();

        return $courses;
    }
    public static function countCoursesAdmin()
    {
        $courses = DB::table('l_courses')
            ->where('delete_flag',0)
            ->count();

        return $courses;
    }
    public static function countCategories()
    {
        $cate = DB::table('l_category')->where('delete_flag',0)->count();

        return $cate;
    }
    public static function countOrders()
    {
        $orders = DB::table('l_orders')->where('deleted_flag',0)->count();

        return $orders;
    }
    public static function to_slug($str) {
        $str = trim(mb_strtolower($str));
        $str = preg_replace('/(à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ)/', 'a', $str);
        $str = preg_replace('/(è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ)/', 'e', $str);
        $str = preg_replace('/(ì|í|ị|ỉ|ĩ)/', 'i', $str);
        $str = preg_replace('/(ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ)/', 'o', $str);
        $str = preg_replace('/(ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ)/', 'u', $str);
        $str = preg_replace('/(ỳ|ý|ỵ|ỷ|ỹ)/', 'y', $str);
        $str = preg_replace('/(đ)/', 'd', $str);
        $str = preg_replace('/[^a-z0-9-\s]/', '', $str);
        $str = preg_replace('/([\s]+)/', '-', $str);
        return $str;
    }
    public static function getListCateGroup(){
    $cateGroup = DB::table('l_category_group')->where('delete_flag',0)->get();

    return $cateGroup;
}
    public static function getListCate(){
        $cateGroup = DB::table('l_category')->where('delete_flag',0)->get();

        return $cateGroup;
    }
    public static function getListBanner(){
        $listbBnner = DB::table('l_banner')
            ->where('delete_flag',0)
            ->where('point',2)
            ->limit(3)
            ->get();

        return $listbBnner;
    }
    public static function getListBannerBig(){
        $listbBnner = DB::table('l_banner')
            ->where('delete_flag',0)
            ->where('point',1)
            ->limit(4)
            ->get();

        return $listbBnner;
    }

    public static function countOrderByCustomer()
    {
        $countOrdersByCustomer = DB::table('l_orders_save')
            ->leftJoin('l_orders','l_orders.order_code','=','l_orders_save.order_code')
            ->where('l_orders_save.deleted_flag',0)
            ->where('l_orders.status',1)
            ->where('l_orders_save.customer_id',Auth::guard('l_customers')->user()->id)
            ->count();
        return $countOrdersByCustomer;
    }
    public static function getContactsConfig(){
        $config = DB::table('l_contacts_config')
            ->first();
        return $config;
    }
    public static function checkOrder($id){
        $checkOrders = DB::table('l_orders')->where('l_orders.customer_id',Auth::guard('l_customers')->user()->id)
            ->where('l_orders.course_id',$id)
            ->select('l_orders.*')
            ->get();
        return $checkOrders;
    }


    public static function sales($price,$sale_price){
        $sale = 100-(($sale_price/$price)*100);
        return floor($sale);
    }


}