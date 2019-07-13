<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 04-May-19
 * Time: 9:23 PM
 */

namespace App\Http\Controllers\Backend;

use App\Helpers\Helpers;
use App\Http\Requests\CategoryRequest;
use App\Http\Requests\Request;
use App\Reponsitories\Categories\CategoriesReponsitories;
use App\Reponsitories\CategoriesGroup\CategoriesGroupReponsitories;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class CategoryController extends Controller
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function __construct(
        CategoriesGroupReponsitories $categoriesGroup,
        CategoriesReponsitories $categories
    ){
        $this->categoriesGroup = $categoriesGroup;
        $this->categories = $categories;
    }
    public function index(){
        if(Auth::user()->user_group ==1) {
            $listCate = $this->categories->getListCategory();
            return view('Backend.Categories.list',compact('listCate'));
        }else{
            return view('Backend.Error.503');
        }

    }
    public function create(){
        if(Auth::user()->user_group ==1) {
            $listCateGroup = $this->categoriesGroup->all('id asc');
            return view('Backend.Categories.add',compact('listCateGroup'));
        }else{
            return view('Backend.Error.503');
        }

    }
    public function store(CategoryRequest $request){
        $addCategory =[
            'cate_name'=>$request->cate_name,
            'cate_group_id'=>$request->cate_group_id,
            'slug_cate' =>Helpers::to_slug($request->cate_name)
        ];
        if ($this->categories->create($addCategory)) {
            return redirect()->route('category-list')->with('success', 'Thêm mới thành công ')->withInput();
        } else {
            return redirect()->back()->with('error', 'Thêm mới thất bại')->withInput();
        }
    }
    public function destroy($id){
        if(Auth::user()->user_group ==1) {
            try {
                $this->categories->update(['delete_flag'=>1],$id);
//              deleted news in cate_group
                $this->news->updateName(['delete_flag'=>1],$id,'cate_id');
//                deleted course in cate_group
                $this->courses->updateName(['delete_flag'=>1],$id,'cate_id');
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