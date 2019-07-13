<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 26-May-19
 * Time: 10:34 PM
 */

namespace App\Http\Controllers\Frontend;


use App\Http\Controllers\Controller;
use App\Http\Requests\ContactsRequests;
use App\Reponsitories\Cities\CitiesReponsitories;
use App\Reponsitories\Contacts\ContactsReponsitories;
use App\Reponsitories\ContactsConfig\ContactsConfigReponsitories;
use App\Reponsitories\Districts\DistrictReponsitories;
use Yoeunes\Toastr\Toastr;

class ContactsControllers extends Controller
{
    public function __construct(
        CitiesReponsitories $cities,
        DistrictReponsitories $district,
        ContactsReponsitories $contacts,
        ContactsConfigReponsitories $contactsConfig
    )
    {
        $this->cities = $cities;
        $this->district = $district;
        $this->contacts = $contacts;
        $this->contactsConfig = $contactsConfig;

    }
    public function index(){
        $cities = $this->cities->all('id asc');
        $district = $this->district->all('id asc');
        $mapContactsConfig = $this->contactsConfig->getContactsConfig();
        return view('Frontend.contacts',compact('cities','district','mapContactsConfig'));
    }
    public function store(ContactsRequests $requests){
        $addContacts = [
            'full_name' => $requests->full_name,
            'email'=>$requests->email,
            'phone'=>$requests->phone,
            'city_id'=>$requests->city_id,
            'district_id'=>$requests->district_id,
            'content_contacts'=>$requests->content_contacts
        ];
        if($this->contacts->create($addContacts)){
            Toastr()->success('Liên hệ thành công');
            return redirect()->back();

        }else{
            Toastr()->error('Liên hệ thất bại');
            return redirect()->back();
        }
    }
}