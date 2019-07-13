<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 02-Jun-19
 * Time: 8:55 PM
 */

namespace App\Http\Controllers\Backend;


use App\Http\Controllers\Controller;
use App\Http\Requests\Request;
use App\Reponsitories\ContactsConfig\ContactsConfigReponsitories;
use App\Reponsitories\Orders\OrdersReponsitories;
use Carbon\Carbon;
use Yoeunes\Toastr\Toastr;
use Maatwebsite\Excel\Excel;
use Illuminate\Support\Facades\DB;
use Barryvdh\DomPDF\PDF;
class OrdersController extends Controller
{
    public function __construct(
        OrdersReponsitories $orders,
        ContactsConfigReponsitories $contactsConfig
    )
    {
        $this->orders = $orders;
        $this->contactsConfig = $contactsConfig;
    }
    public function index(){
        $listOrder = $this->orders->listOrders();
        return view('Backend.Orders.order-list',compact('listOrder'));
    }
    public function changeStatusOrders(Request $request){
        $updateStatus = [
            'status'=> 1
        ];
        if($this->orders->update($updateStatus,$request->order_id)){
            Toastr()->success('Cập nhật thành công');
            return redirect()->back();
        }else{
            Toastr()->success('Cập nhật thất bại');
            return redirect()->back();
        }
    }
    public function searchOrders(Request $request){
        $listOrder = $this->orders->searchOrder($request->searchOrder);
        return view('Backend.Orders.order-list',compact('listOrder'));
    }
    public function export(Request $request){
        if($request->export == 1){
            $nameExcel = 'orders-all-'.date_format(new \DateTime(Carbon::now()->toDateString()),'d-m-Y').'.xlsx';
            $orders = DB::table('l_orders')
                ->leftJoin('l_orders_save','l_orders_save.order_code','=','l_orders.order_code')
                ->leftJoin('l_customers','l_orders.customer_id','=','l_customers.id')
                ->leftJoin('l_courses','l_orders_save.course_id','=','l_courses.id')
                ->where('l_orders.deleted_flag',0)
                ->select('l_orders.*','l_courses.c_title','l_courses.c_price','l_courses.c_price_sale','l_customers.full_name','l_customers.address')
                ->orderBy('id','desc')
                ->get();
        }elseif($request->export == 2){
            $nameExcel = 'orders-daily-'.date_format(new \DateTime(Carbon::now()->toDateString()),'d-m-Y').'.xlsx';
            $orders = DB::table('l_orders')
                ->leftJoin('l_orders_save','l_orders_save.order_code','=','l_orders.order_code')
                ->leftJoin('l_customers','l_orders.customer_id','=','l_customers.id')
                ->leftJoin('l_courses','l_orders_save.course_id','=','l_courses.id')
                ->Where(function ($query){
                    $query->whereDate('l_orders.created_at', '>=',Carbon::now()->startOfDay()->toDateString())
                        ->whereDate('l_orders.created_at', '<',Carbon::now()->endOfDay()->toDateString());
                })
                ->where('l_orders.deleted_flag',0)
                ->select('l_orders.*','l_courses.c_title','l_courses.c_price','l_courses.c_price_sale','l_customers.full_name','l_customers.address')
                ->orderBy('id','desc')
                ->get();
        }elseif($request->export == 3){
            $nameExcel = 'orders-weekly-'.date_format(new \DateTime(Carbon::now()->toDateString()),'d-m-Y').'.xlsx';
            $orders = DB::table('l_orders')
                ->leftJoin('l_orders_save','l_orders_save.order_code','=','l_orders.order_code')
                ->leftJoin('l_customers','l_orders.customer_id','=','l_customers.id')
                ->leftJoin('l_courses','l_orders_save.course_id','=','l_courses.id')
                ->Where(function ($query){
                    $query->whereDate('l_orders.created_at', '>=',Carbon::now()->startOfWeek()->toDateString())
                        ->whereDate('l_orders.created_at', '<',Carbon::now()->endOfWeek()->toDateString());
                })
                ->where('l_orders.deleted_flag',0)
                ->select('l_orders.*','l_courses.c_title','l_courses.c_price','l_courses.c_price_sale','l_customers.full_name','l_customers.address')
                ->orderBy('id','desc')
                ->get();
        }elseif($request->export == 4){
            $nameExcel = 'orders-monthly-'.date_format(new \DateTime(Carbon::now()->toDateString()),'d-m-Y').'.xlsx';
            $orders = DB::table('l_orders')
                ->leftJoin('l_orders_save','l_orders_save.order_code','=','l_orders.order_code')
                ->leftJoin('l_customers','l_orders.customer_id','=','l_customers.id')
                ->leftJoin('l_courses','l_orders_save.course_id','=','l_courses.id')
                ->Where(function ($query){
                    $query->whereDate('l_orders.created_at', '>=',Carbon::now()->startOfMonth()->toDateString())
                        ->whereDate('l_orders.created_at', '<',Carbon::now()->endOfMonth()->toDateString());
                })
                ->where('l_orders.deleted_flag',0)
                ->select('l_orders.*','l_courses.c_title','l_courses.c_price','l_courses.c_price_sale','l_customers.full_name','l_customers.address')
                ->orderBy('id','desc')
                ->get();
        }
       if(count($orders) > 0){
           return \Excel::download(new \App\Http\Controllers\Backend\ExcelController($orders), $nameExcel);
       }else{
           Toastr()->warning('Không có đơn hàng nào');
           return redirect()->back();
       }

    }

    public function show($id){
        $contacts = $this->contactsConfig->getContactsConfig();
        $listCourseForCustomer = $this->orders->getShowCourseForCus($id);
        $infoOrder = $this->orders->getInfoCus($id);
        return view('Backend.Orders.show',compact('contacts','listCourseForCustomer','infoOrder'));
    }

    public function downloadPDF(PDF $pdfCreator, $id){
        $contacts = $this->contactsConfig->getContactsConfig();
        $listCourseForCustomer = $this->orders->getShowCourseForCus($id);
        $infoOrder = $this->orders->getInfoCus($id);
        $pdf = $pdfCreator->loadView('Backend.Orders.pdf',compact('contacts','listCourseForCustomer','infoOrder'));
        return $pdf->stream('order.pdf');
    }

}
