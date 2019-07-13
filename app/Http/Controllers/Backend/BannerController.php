<?php

namespace App\Http\Controllers\Backend;
use App\Helpers\Helpers;
use App\Http\Controllers\Controller;
use App\Http\Requests\BannerRequest;
use App\Reponsitories\Banner\BannerRepositories;
use App\Reponsitories\TypeBanner\TypeBannerRepositories;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Upload;
use Illuminate\Support\Facades\Auth;

class BannerController extends Controller
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function __construct(
        TypeBannerRepositories $typeBanner,
        BannerRepositories $banner
    ){
        $this->typeBanner = $typeBanner;
        $this->banner = $banner;
    }
    public function index(){
        if(Auth::user()->user_group ==1) {
            $listBanner = $this->banner->getListBanner();
            return view('Backend.Banner.banner-list', compact('listBanner'));
        }else{
            return view('Backend.Error.503');
        }
    }
    public function create(){
        if(Auth::user()->user_group ==1) {
            $typeBanner = $this->typeBanner->all();
            return view('Backend.Banner.banner-add',compact('typeBanner'));
        }else{
            return view('Backend.Error.503');
        }

    }
    public function store(BannerRequest $request){
        $addBanner = [
            'name' => $request->name,
            'banner_type_id' => $request->banner_type,
            'point' => $request->point,
            'url_banner' =>  Helpers::to_slug($request->name),
            'delete_flag'=>0

        ];
        if ($request->hasFile('images')) {
            $addBanner['images'] = Upload::getImage('images', 'upload/banner/images', $request);
        };
            if ($this->banner->create($addBanner)) {
                return redirect()->route('banner-list')->with('success', 'Thêm mới thành công ')->withInput();
            } else {
                return redirect()->back()->with('error', 'Thêm mới thất bại')->withInput();
            }

    }
    public function destroy($id)
    {
        if(Auth::user()->user_group ==1) {
            try {
                $this->banner->update(['delete_flag'=>1],$id);
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