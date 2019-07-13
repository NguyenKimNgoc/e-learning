<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 05-Mar-19
 * Time: 7:55 PM
 */

namespace App\Http\Controllers\Frontend;


use App\Http\Controllers\Controller;
use App\Http\Requests\CustomerRegisterRequest;
use App\Reponsitories\Cities\CitiesReponsitories;
use App\Reponsitories\Customers\CustomersReponsitories;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\CustomerRequest;
use App\Helpers\Helpers;
class LoginController extends Controller
{
    public function __construct(
        CitiesReponsitories $cities,
        CustomersReponsitories $customers
    )
    {
        $this->cities = $cities;
        $this->customers = $customers;
    }

    public function register(){
        $cities=$this->cities->all('id asc');
        return view('Frontend.register',compact('cities'));
    }

    public function postRegister(CustomerRegisterRequest $request)
    {
        $registerCus =[
            'full_name'=>$request->full_name,
            'email'=>$request->email,
            'address'=>$request->address,
            'phone'=>$request->phone,
            'password' =>bcrypt($request->password),
            'city_id'=>$request->city_id,
            'slug_customer'=>Helpers::to_slug($request->full_name)
        ];

        $checkMail = $this->customers->checkMail($request->email);
        if(empty($checkMail)){
            if ($reCustomer = $this->customers->create($registerCus)) {
                $route  = route('activeAccount',$reCustomer->id);
//                send mail active
                \Mail::to($request->email)->send(new \App\Mail\MailAuto($route));
                return redirect()->route('loginFrontend')->with('success', ' Đăng ký thành công và hãy vào email để active tài khoản ')->withInput();
            } else {
                return redirect()->back()->with('error', 'Đăng ký thất bại')->withInput();
            }
        }else{
            return redirect()->back()->with('error', 'Email đã tồn tại')->withInput();
        }

    }
    public function activeAccount($id){
        $active=[
            'active'=>1
        ];
        $this->customers->update($active,$id);
        return redirect()->route('loginFrontend')->with('success', 'Active Tài khoản thành công')->withInput();
    }
    public function loginFrontend()
    {
        return view('Frontend.login');
    }

    public function postLogin(CustomerRequest $request)
    {
        $error = 'Email hoặc mật khẩu không dúng';
        $data = [
            'email' => $request->email,
            'password' => $request->password,
            'active'=>1
        ];

        $remember = true;

        $customer = Auth::guard('l_customers');

        if (!$customer->attempt($data, $remember)) {
            return redirect()->back()->with('error', $error)->withInput();
        }

        return redirect()->route('trang-chu');
    }

    public function logoutFrontend()
    {
        Auth::guard('l_customers')->logout();
        return redirect()->route('trang-chu');
    }

}