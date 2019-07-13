<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 24-May-19
 * Time: 9:10 PM
 */

namespace App\Reponsitories\Orders;
use App\Reponsitories\BaseRepository;

use App\Model\Orders;
use DB;
class OrdersReponsitories extends BaseRepository
{
    public function getModel()
    {
        return Orders::class;
    }
    public function checkOrdersCourse($customer_id,$course_id){
        return $this->model
            ->where('l_orders.customer_id',$customer_id)
            ->where('l_orders.course_id',$course_id)
            ->select('l_orders.*')
            ->get();
    }
    public function checkCourseInCustomer($course_id,$customer_id){
        return $this->model
            ->where('l_orders.customer_id',$customer_id)
            ->where('l_orders.course_id',$course_id)
            ->first();
    }

    public function listHistoryCustomer($id){
        return $this->model
                ->leftJoin('l_orders_save','l_orders_save.order_code','=','l_orders.order_code')
                ->leftJoin('l_customers','l_customers.id','=','l_orders.customer_id')
                ->leftJoin('l_courses','l_courses.id','=','l_orders_save.course_id')
                ->leftJoin('l_users','l_courses.c_author_id','=','l_users.id')
                ->where('l_orders.customer_id',$id)
                ->where('l_orders.deleted_flag',0)
                ->where('l_orders.status',1)
                ->select('l_orders.created_at','l_courses.*', 'l_users.*','l_users.id as userID','l_courses.id as course_id')
                ->orderBy('l_orders.id', 'desc')
                ->paginate(20);
    }
    public function searchHistoryOrder($id,$search){
        return $this->model
            ->leftJoin('l_orders_save','l_orders_save.order_code','=','l_orders.order_code')
            ->leftJoin('l_customers','l_customers.id','=','l_orders.customer_id')
            ->leftJoin('l_courses','l_courses.id','=','l_orders_save.course_id')
            ->leftJoin('l_users','l_courses.c_author_id','=','l_users.id')
            ->where(function($query) use ($search) {
                /** @var $query Illuminate\Database\Query\Builder  */
                $query->Where('l_courses.c_title', 'like', '%' . $search . '%')
                    ->orWhere('l_customers.full_name', 'like', '%' . $search . '%')
                    ->orWhere('l_courses.c_price', 'like', '%' . $search . '%')
                    ->orWhere('l_courses.c_price_sale', 'like', '%' . $search . '%');
            })
            ->where('l_orders.deleted_flag',0)
            ->where('l_orders.status',1)
            ->where('l_orders.customer_id',$id)
            ->select('l_orders.created_at','l_courses.*', 'l_users.*','l_users.id as userID','l_courses.id as course_id')
            ->orderBy('l_orders.id', 'desc')
            ->paginate(20);
    }
    public function listOrders(){
        return $this->model
                ->leftJoin('l_orders_save','l_orders_save.order_code','=','l_orders.order_code')
                ->leftJoin('l_customers','l_customers.id','=','l_orders.customer_id')
                ->select('l_orders.*','l_customers.full_name','l_customers.address','l_orders.created_at as created')
                ->orderBy('id','desc')
                ->distinct('l_orders.order_code')
                ->paginate(20);
    }
    public function searchOrder($searchOrder){
        return $this->model
            ->leftJoin('l_customers','l_customers.id','=','l_orders.customer_id')
            ->leftJoin('l_orders_save','l_orders_save.order_code','=','l_orders.order_code')
            ->leftJoin('l_courses','l_courses.id','=','l_orders_save.course_id')
            ->where(function($query) use ($searchOrder) {
                /** @var $query Illuminate\Database\Query\Builder  */
                $query->Where('l_orders.total_number', 'like', '%' . $searchOrder . '%')
                    ->orWhere('l_customers.full_name', 'like', '%' . $searchOrder . '%')
                    ->orWhere('l_customers.address', 'like', '%' . $searchOrder . '%')
                    ->orWhere('l_orders.qty', 'like', '%' . $searchOrder . '%')
                    ->orWhere('l_orders.note_order', 'like', '%' . $searchOrder . '%');
            })
            ->where('l_orders.deleted_flag',0)
            ->select('l_orders.*','l_customers.full_name','l_customers.address')
            ->orderBy('id','desc')
            ->paginate(20);
    }

    public function getShowCourseForCus($id){
        return $this->model
                ->leftJoin('l_orders_save','l_orders_save.order_code','=','l_orders.order_code')
                ->leftJoin('l_customers','l_customers.id','=','l_orders.customer_id')
                ->leftJoin('l_courses','l_orders_save.course_id','=','l_courses.id')
                ->where('l_orders_save.order_code',$id)
                ->where('l_orders.deleted_flag',0)
                ->select('l_courses.*','l_customers.full_name','l_orders.note_order','l_orders.status')
                ->orderBy('id','asc')
                ->get();
    }

    public function getInfoCus($id){
        return $this->model
                ->leftJoin('l_customers','l_orders.customer_id','=','l_customers.id')
                ->where('l_orders.order_code',$id)
                ->where('l_orders.deleted_flag',0)
                ->select('l_customers.*','l_orders.*','l_orders.id as order_id')
                ->first();
    }

    public function getDataSendMailCourse($id){
        return $this->model
                ->leftJoin('l_orders_save','l_orders_save.order_code','=','l_orders.id')
                ->leftJoin('l_courses','l_courses.id','=','l_orders_save.course_id')
                ->leftJoin('l_users','l_courses.c_author_id','=','l_users.id')
                ->where('l_orders.deleted_flag',0)
                ->where('l_orders_save.order_code',$id)
                ->select('l_orders.*','l_courses.c_title','l_courses.c_price','l_courses.c_price_sale','l_courses.c_hot','l_users.full_name as username')
                ->get();
    }


}