<?php
namespace App\Http\Controllers\Backend;


use App\Helpers\Helpers;
use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryGroupRequest;
use App\Reponsitories\Categories\CategoriesReponsitories;
use App\Reponsitories\CategoriesGroup\CategoriesGroupReponsitories;
use App\Reponsitories\Courses\CoursesRepositories;
use App\Reponsitories\News_in_course\NewInCourseRepositories;
use Hamcrest\Thingy;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\Auth;
class CategoriesGroupController extends Controller
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function __construct(
        CategoriesGroupReponsitories $categoriesGroup,
        CategoriesReponsitories $category,
        CoursesRepositories $courses,
        NewInCourseRepositories $news
    ){
        $this->categoriesGroup = $categoriesGroup;
        $this->category = $category;
        $this->courses = $courses;
        $this->news = $news;
    }
    public function index(){
        if(Auth::user()->user_group ==1) {
        $listCateGroup = $this->categoriesGroup->getListCateGroup();
        return view('Backend.CategoryGroup.list',compact('listCateGroup'));
        }else{
            return view('Backend.Error.503');
        }
    }
    public function create(){
        if(Auth::user()->user_group ==1) {
            return view('Backend.CategoryGroup.add');
        }else{
            return view('Backend.Error.503');
        }

    }
    public function store(CategoryGroupRequest $request){
        $addCateGroup =[
            'name' =>$request->name,
            'slug_cate_group' =>Helpers::to_slug($request->name)
        ];
        if ($this->categoriesGroup->create($addCateGroup)) {
            return redirect()->route('categoryGroup-list')->with('success', 'Thêm mới thành công ')->withInput();
        } else {
            return redirect()->back()->with('error', 'Thêm mới thất bại')->withInput();
        }
    }
    public function destroy($id){
        if(Auth::user()->user_group ==1) {
            try {
                $this->categoriesGroup->update(['delete_flag'=>1],$id);
//                deleted catgory
                $this->category->updateName(['delete_flag'=>1],$id,'cate_group_id');
//              deleted news in cate_group
                $this->news->updateName(['delete_flag'=>1],$id,'cate_group_id');
//                deleted course in cate_group
                $this->courses->updateName(['delete_flag'=>1],$id,'c_type_course');
                return response()->json(['code' => 200]);
            } catch(\Exception $e) {
                Log::error('Something is really going wrong.' . $e->getMessage() . 'Line' . $e->getLine());
                return response()->json(['code' => 500]);
            }
        }else{
            return view('Backend.Error.503');
        }

    }
}