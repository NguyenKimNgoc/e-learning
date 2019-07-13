<?php
namespace App\Http\Controllers\Backend;

use App\Helpers\Helpers;
use App\Http\Controllers\Controller;
use App\Http\Requests\Request;
use App\Http\Requests\UserRequest;
use App\Reponsitories\Courses\CoursesRepositories;
use App\Reponsitories\Industries\IndustriesReponsitory;
use App\Reponsitories\Major\MajorRepository;
use App\Reponsitories\News_in_course\NewInCourseRepositories;
use App\Reponsitories\UserGroup\UserGroupRepository;
use App\Reponsitories\Users\UsersRepository;
use App\Upload;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\Auth;
class UsersController extends Controller
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function __construct(
        UsersRepository $users,
        UserGroupRepository $userGroup,
        IndustriesReponsitory $industries,
        MajorRepository $major,
        CoursesRepositories $courses,
        NewInCourseRepositories $news
    ){
        $this->users = $users;
        $this->userGroup = $userGroup;
        $this->industries = $industries;
        $this->major = $major;
        $this->courses = $courses;
        $this->news = $news;
    }
    public function index(){
        if(Auth::user()->user_group ==1){
            $listUser = $this->users->listIndex();
            return view('Backend.Users.users-list',compact('listUser'));
        }else{
            return view('Backend.Error.503');
        }

    }
    public function create(){
        if(Auth::user()->user_group ==1){
            $userGroup = $this->userGroup->all('id asc');
            $listIndustries = $this->industries->all('id asc');
            $listMajor = $this->major->all('id asc');
            return view('Backend.Users.user-add',compact('userGroup','listIndustries','listMajor'));
        }else{
            return view('Backend.Error.503');
        }

    }
    public function store(UserRequest $request){
        $addUser = [
            'full_name' => $request->full_name,
            'slug_user' =>Helpers::to_slug($request->full_name),
            'email' =>$request->email,
            'password' => bcrypt($request->password),
            'phone' =>$request->phone,
            'skype' =>$request->skype,
            'youtube' =>$request->youtube,
            'facebook' =>$request->facebook,
            'linkedin' =>$request->linkedin,
            'address' =>$request->address,
            'major' =>$request->major,
            'industries' =>$request->industries,
            'birthday' =>$request->birthday,
            'user_group' =>$request->user_group_id,
            'active' => 1
        ];
        if ($request->hasFile('avatar')) {
            $addUser['avatar'] = Upload::getImage('avatar', 'upload/users/images', $request);
        };
        $checkMail = $this->users->checkMail($request->email);
        if(empty($checkMail)){
            if ($this->users->create($addUser)) {
                return redirect()->route('admin-users-list')->with('success', 'Thêm mới thành công ')->withInput();
            } else {
                return redirect()->back()->with('error', 'Thêm mới thất bại')->withInput();
            }
        }else{
            return redirect()->back()->with('error', 'Email đã tồn tại')->withInput();
        }

    }
    public function edit($id)
    { if(Auth::user()->user_group == 1 || Auth::user()->id == $id){
        $userGroup = $this->userGroup->all('id asc');
        $listIndustries = $this->industries->all('id asc');
        $listMajor = $this->major->all('id asc');
        $userEdit = $this->users->findBy('id',$id);
        return view('Backend.Users.user-edit',compact('userGroup','listIndustries','listMajor','userEdit'));
    }else{
        return view('Backend.Error.503');
    }

    }

    public function update(UserRequest $request,$id)
    {
        $editUser = [
            'full_name' => $request->full_name,
            'slug_user' =>Helpers::to_slug($request->full_name),
            'email' =>$request->email,
            'password' => bcrypt($request->password),
            'phone' =>$request->phone,
            'skype' =>$request->skype,
            'youtube' =>$request->youtube,
            'facebook' =>$request->facebook,
            'linkedin' =>$request->linkedin,
            'address' =>$request->address,
            'major' =>$request->major,
            'industries' =>$request->industries,
            'birthday' =>$request->birthday,
            'user_group' =>$request->user_group_id,
            'active' => 1
        ];
        if ($request->hasFile('avatar')) {
            $editUser['avatar'] = Upload::getImage('avatar', 'upload/users/images', $request);
        };
        $user= $this->users->findBy('id',$id);
        if($user->email != $request->email){
            $checkMail = $this->users->checkMail($request->email);
        }
        if(empty($checkMail)){
            if ($this->users->update($editUser,$id,'id')) {
                if(Auth::user()->user_group ==1 ){
                    return redirect()->route('admin-users-list')->with('success', 'Chỉnh Sửa Thành Công  ')->withInput();
                }elseif(Auth::user()->id == $id){
                    toastr()->success('Bạn đã cập nhật thành công!');
                    return redirect()->route('user-show',['id'=>$id,'slug_user'=>Auth::user()->slug_user])->with('success', 'Chỉnh Sửa Thành Công  ')->withInput();
                }

            } else {
                return redirect()->back()->with('error', 'Chỉnh Sửa Thất Bại')->withInput();
            }
        }else{
            return redirect()->back()->with('error', 'Email đã tồn tại')->withInput();
        }

    }
    public function show($id)
    {
            $listCourseInUser = $this->courses->getListCourseById($id);
            $showUser = $this->users->showUser($id);
            return view('Backend.Users.user-show',compact('showUser','listCourseInUser'));

    }
    public function destroy($id)
    {
        if(Auth::user()->user_group ==1){
            try {
                $this->users->update(['delete_flag'=>1],$id);
                return response()->json(['code' => 200]);
            } catch(\Exception $e) {
                Log::error('Something is really going wrong.' . $e->getMessage() . 'Line' . $e->getLine());
                return response()->json(['code' => 500]);
            }
        }else{
            return view('Backend.Error.503');
        }


    }
    public function search(Request $request){
        $listUser = $this->users->searchUser($request->search);
        return view('Backend.Users.users-list',compact('listUser'));
    }
}
