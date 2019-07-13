<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 11-May-19
 * Time: 10:03 AM
 */

namespace App\Http\Controllers\Frontend;


use App\Helpers\Helpers;
use App\Http\Controllers\Controller;
use App\Http\Requests\CustomerRegisterRequest;
use App\Http\Requests\Request;
use App\Model\Courses;
use App\Reponsitories\Cities\CitiesReponsitories;
use App\Reponsitories\Courses\CoursesRepositories;
use App\Reponsitories\Customers\CustomersReponsitories;
use App\Reponsitories\Users\UsersRepository;
use App\Upload;
class ProfileController extends Controller
{
    public function __construct(
    CustomersReponsitories $customer,
    CitiesReponsitories $cities,
    UsersRepository $users,
    CoursesRepositories $courses
    )
    {
        $this->customer = $customer;
        $this->cities = $cities;
        $this->users = $users;
         $this->courses = $courses;
    }
    public function index($id){
        $customer = $this->customer->getProfile($id);
        return view('Frontend.Customers.profile',compact('customer'));
    }
    public function edit($id){
        $cities=$this->cities->all('id asc');
        $editCustomer = $this->customer->getProfile($id);
        return view('Frontend.Customers.edit-profile',compact('editCustomer','cities'));
    }
    public function update(Request $request,$id,$slug_customer){
        $updateCustomer = [
            'full_name' =>$request->full_name,
            'address'=>$request->address,
            'phone'=>$request->phone,
            'city_id' =>$request->city_id,
            'description' =>$request->description,
            'slug_customer'=>Helpers::to_slug($request->full_name)
        ];

        if ($request->hasFile('avatar')) {
            $updateCustomer['avatar'] = Upload::getImage('avatar', 'upload/Customers', $request);
        };
        if ($this->customer->update($updateCustomer,$id)) {
            toastr()->success('Cập Nhật Thành Công!');
            return redirect()->route('profile',['id'=>$id,'slug_customer'=>$slug_customer]);
        } else {
            toastr()->error('Cập Nhật Thất Bại');
        }
    }
    public function profileAuthor($id){
        $getProfile = $this->users->showUser($id);
        $cousesForAuthor = $this->courses->getListCourseAuthor($id);
        return view('Frontend.profile-author',compact('getProfile','cousesForAuthor'));
    }
}