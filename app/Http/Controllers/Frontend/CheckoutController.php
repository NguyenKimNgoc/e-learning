<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 05-Mar-19
 * Time: 7:55 PM
 */

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;
use App\Http\Requests\CheckoutRequest;
use App\Http\Requests\Request;
use App\Model\Orders;
use App\Model\OrderSave;
use App\Reponsitories\Cities\CitiesReponsitories;
use App\Reponsitories\Customers\CustomersReponsitories;
use App\Reponsitories\Districts\DistrictReponsitories;
use App\Reponsitories\Orders\OrdersReponsitories;
use App\Reponsitories\OrderSave\OrderSaveReponsitories;
use function GuzzleHttp\Psr7\str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Stripe;
use Gloudemans\Shoppingcart\Cart;
class CheckoutController extends Controller
{



    public function __construct(
        CitiesReponsitories $cities,
        DistrictReponsitories $district,
        CustomersReponsitories $customers,
        OrdersReponsitories $orders,
        OrderSaveReponsitories $ordersave
    )
    {
        $this->cities = $cities;
        $this->district = $district;
        $this->customers = $customers;
        $this->orders = $orders;
        $this->ordersave = $ordersave;

    }

    public function index(){

            $cities = $this->cities->all('id asc');
            $district = $this->district->all('id asc');
            return view('Frontend.checkout',compact('cities','district'));
    }

    public function postCheckout(Request $request)
    {
        $id = \Auth::guard('l_customers')->user()->id;
        $total = (int)preg_replace("/([^0-9\\.])/i", "", \Cart::total());
        $contents = \Cart::content()->map(function($item){
            return $item->model->c_title.', '.$item->qty;
        })->values()->toJson();
        $orders = new Orders();
        $orders->order_code = substr(md5(time()), 0, 16);
        $orders->customer_id = $id;
        $orders->qty = \Cart::count();
        $orders->city_id = $request->city_id;
        $orders->district_id = $request->district_id;
        $orders->payment = $request->payment;
        $orders->note_order = $request->note_order;
        $orders->total_number = $total;
        $orders->save();

        foreach(\Cart::content() as $value)
        {
            $order_save = new OrderSave();
            $order_save->order_code = $orders->order_code;
            $order_save->customer_id = $id;
            $order_save->course_id = $value->id;
            $order_save->price = $value->price;
            $order_save->save();
        }
        try {
            Stripe\Stripe::setApiKey('sk_test_nigDhIZvfmytC4m6ricA4iIN00d7cuc4FT');
            $charge = Stripe\Charge::create([
                'amount' => $total,
                'currency' => 'USD',
                'source' => $request->stripeSource,
                'description' => $request->note_order,
                'receipt_email' => $request->email,
                'metadata' => [
                    'contents' => $contents,
                    'quantity' => \Cart::count()
                ],
            ]);
            \Cart::delAllCart();
            $this->orders->update(['status'=>1],$orders->id);
            $dataCustomer = $this->customers->findBy('id',Auth::guard('l_customers')->user()->id);
            $dataSendMail = $this->orders->getDataSendMailCourse($orders->order_code);
            Mail::to(Auth::guard('l_customers')->user()->email)
                ->bcc('kimngoc.humg@gmail.com')
                ->send(new \App\Mail\sendMailPaymentSuccess($dataCustomer,$dataSendMail,$orders->id,$orders->total_number,$orders->created_at));
            toastr()->success('Thanh Toán Thành Công!');
            return redirect()->route('trang-chu');
        } catch (\Exception $e) {
            $this->orders->deleteWhere(['order_code'=>$orders->order_code]);
            $this->ordersave->deleteWhere(['order_code'=>$orders->order_code]);
            toastr()->error('Thanh Toán Thất Bại!');
            return back();
        }
    }

    public function changeDistrict( CheckoutRequest $request ){
        $id = $request->id;
        $district= $this->district->listDistrictById($id);
        $districtHTML =  view('Frontend.Ajax.districtAjax',compact('district'))->render();
        return response()->json( array('success' => true, 'html'=>$districtHTML) );

    }
}