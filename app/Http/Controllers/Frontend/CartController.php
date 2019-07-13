<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 05-Mar-19
 * Time: 7:55 PM
 */

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;
use App\Http\Requests\CartRequest;
use App\Reponsitories\Orders\OrdersReponsitories;
use Gloudemans\Shoppingcart\Cart;
use Illuminate\Support\Facades\Auth;
use Yoeunes\Toastr\Toastr;

class CartController extends Controller
{
    public function __construct(
        OrdersReponsitories $orders
    )
    {
        $this->orders = $orders;
    }
    public function index(){
        return view('Frontend.cart-list');
    }
    public function addToCart(CartRequest $request)
    {
        $checkOrders = $this->orders->checkOrdersCourse(Auth::guard('l_customers')->user()->id,$request->id);
        $checkCart = \Cart::content();
       foreach ($checkCart as $check){
           if($check->id == $request->id){
               Toastr()->warning('Khóa học đã có trong giỏ hàng');
               return redirect()->back();
           }
       }
            if(count($checkOrders) > 0){
                Toastr()->warning('Bạn đã mua khóa học này rồi');
                return redirect()->back();
            }else{
                \Cart::add($request->id, $request->title, 1,
                    isset($request->price_sale) ? $request->price_sale : $request->price)->associate('App\Model\Courses');
                Toastr()->success('Thêm vào giỏ hàng thành công');
                return redirect()->back();
            }
        }
    public function paymentNow(CartRequest $request)
    {
        $checkOrders = $this->orders->checkOrdersCourse(Auth::guard('l_customers')->user()->id,$request->id);
        $checkCart = \Cart::content();
        foreach ($checkCart as $check){
            if($check->id == $request->id){
                return redirect()->route('check-out');
            }
        }
        if(count($checkOrders) > 0){
            Toastr()->warning('Bạn đã mua khóa học này rồi');
            return redirect()->back();
        }else{
            \Cart::add($request->id, $request->title, 1,
                isset($request->price_sale) ? $request->price_sale : $request->price)->associate('App\Model\Courses');
            return redirect()->route('check-out');
        }
    }
    public function destroy($id){
        \Cart::remove($id);
        Toastr()->success('Bạn đã xóa thành công');
        return redirect()->back();
    }
}