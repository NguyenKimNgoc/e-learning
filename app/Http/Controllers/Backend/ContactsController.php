<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 30-May-19
 * Time: 9:34 AM
 */

namespace App\Http\Controllers\Backend;


use App\Http\Controllers\Controller;
use App\Http\Requests\Request;
use App\Reponsitories\Contacts\ContactsReponsitories;
use App\Reponsitories\ContactsConfig\ContactsConfigReponsitories;
use Yoeunes\Toastr\Toastr;

class ContactsController extends Controller
{
    public function __construct(
        ContactsReponsitories $contacts,
        ContactsConfigReponsitories $contactsConfig
    )
    {
        $this->contacts = $contacts;
        $this->contactsConfig = $contactsConfig;
    }
    public function index(){
        $listContacts = $this->contacts->getListContacts();
        return view('Backend.Contacts.contacts-list',compact('listContacts'));
    }
    public function sendMailContacts(Request $request){
        $contacts = $request->content_contacts;
        $reContacts = $request->replyContact;
        $full_name = $request->full_name;

        \Mail::to($request->email)->send(new \App\Mail\sendMailReplyContacts($contacts,$reContacts,$full_name));
        $this->contacts->update(['deleted_flag'=>1],$request->id);
        toastr()->success('Trả lời thành công!');
        return redirect()->route('contacts-list');

    }

    public function contactsConfig(){
        $contactsConfig = $this->contactsConfig->getContactsConfig();
        return view('Backend.Contacts-Config.contacts-config',compact('contactsConfig'));
    }
    public function edit($id){
        $editContacts = $this->contactsConfig->findBy('id',$id);
        return view('Backend.Contacts-Config.contacts-edit',compact('editContacts'));
    }
    public function update(Request $request,$id){
        $updateContacts = [
            'phone'=>$request->phone,
            'address'=>$request->addressContacts,
            'email'=>$request->email,
            'map'=>$request->map,
            'facebook'=>$request->facebook,
            'linkedin'=>$request->linkedin,
            'instagram'=>$request->instagram,
            'twitter'=>$request->twitter,
        ];
        if($this->contactsConfig->update($updateContacts,$id)){
            Toastr()->success('Cài đặt thành công ');
            return redirect()->route('contacts-config');
        }else{
            Toastr()->error('Cài đặt thất bại ');
            return redirect()->back();
        }
    }

}