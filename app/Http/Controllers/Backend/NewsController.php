<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 28-Apr-19
 * Time: 11:07 PM
 */

namespace App\Http\Controllers\Backend;


use App\Helpers\Helpers;
use App\Http\Controllers\Controller;
use App\Http\Requests\ChangeStatusNewsRequest;
use App\Http\Requests\NewsRequest;
use App\Http\Requests\Request;
use App\Reponsitories\Categories\CategoriesReponsitories;
use App\Reponsitories\CategoriesGroup\CategoriesGroupReponsitories;
use App\Reponsitories\News_Tags\NewsTagReponsitories;
use App\Reponsitories\Tags\TagsReponsitories;
use App\Reponsitories\Courses\CoursesRepositories;
use App\Reponsitories\Industries\IndustriesReponsitory;
use App\Reponsitories\Major\MajorRepository;
use App\Reponsitories\News_in_course\NewInCourseRepositories;
use App\Upload;
use Illuminate\Support\Facades\Auth;
use Yoeunes\Toastr\Toastr;

class NewsController extends Controller
{
    public function __construct(
        CategoriesGroupReponsitories $categoriesGroup,
        CategoriesReponsitories $cate,
        TagsReponsitories $tags,
        NewsTagReponsitories $newsTag,
        CoursesRepositories $course,
        NewInCourseRepositories $news,
        NewsTagReponsitories $newTags
    ){
        $this->categoriesGroup = $categoriesGroup;
        $this->cate = $cate;
        $this->tags = $tags;
        $this->course = $course;
        $this->news = $news;
        $this->newTags = $newTags;
    }
    public function index(){
        if (Auth::user()->user_group == 1){
            $listNews = $this->news->getListNewsAdmin();
            $listTag = $this->newTags->listTag();
            return view('Backend.News.news-list-admin',compact('listNews','listTag'));
        }elseif(Auth::user()->user_group == 3){
            $listNews = $this->news->getListNews();
            $listTag = $this->newTags->listTag();
            return view('Backend.News.news-list',compact('listNews','listTag'));
        }

    }
    public function changeSatusNews(ChangeStatusNewsRequest $request,$id){
        $update =[
            'status'=>1
        ];
        $this->news->update($update,$id);
        $news_name = $request->news_name;
        $c_title = $request->c_title;
        $route = $request->route;
        $user_name = $request->user_name;
        \Mail::to($request->email)->send(new \App\Mail\MailChangeStatusNews($news_name,$c_title,$route,$user_name));
        toastr()->success('Cập nhật trạng thái thành công!');
        return redirect()->route('news-list');

    }
    public function create()
    {
        if (Auth::user()->user_group == 1 || Auth::user()->user_group == 3) {
            $listCateGroup = $this->categoriesGroup->getCateGroup();
            $listCate = $this->cate->getCate();
            $listTags = $this->tags->all('id asc');
            $listCourse = $this->course->getCoursesBy();
            return view('Backend.News.news-add', compact('listCateGroup', 'listCate', 'listTags', 'listCourse'));
        }
    }
    public function store(NewsRequest $request){
        $addNews = [
                'news_name' =>$request->news_name,
                'cate_group_id' =>$request->cate_group_id,
                'cate_id' =>$request->cate_id,
                'content' =>$request->content_news,
                'course_id'=>$request->course_id,
                'author_id' =>Auth::user()->id,
                'slug_news'=>Helpers::to_slug($request->news_name)

        ];
        if ($request->hasFile('new_image')) {
            $addNews['new_image'] = Upload::getImage('new_image', 'upload/News/images', $request);
        };
        if ($request->hasFile('video_news')) {
            $addNews['video_news'] = Upload::getImage('video_news', 'upload/News/videos', $request);
        };

        if ($news = $this->news->create($addNews)) {
                if($newTags = $request->tagID){
                    foreach ($newTags as $tags){
                        $addNewsTags = [
                            'news_id'=>$news->id,
                            'tag_id' => $tags
                        ];
                        $this->newTags->create($addNewsTags);
                    }
                };

            return redirect()->route('news-list')->with('success', 'Thêm mới thành công ')->withInput();
        } else {
            return redirect()->back()->with('error', 'Thêm mới thất bại')->withInput();
        }

    }
    public function edit($id)
    {
        if (Auth::user()->id = $id) {
            $listCateGroup = $this->categoriesGroup->getCateGroup();
            $listCate = $this->cate->getCate();
            $listTags = $this->tags->all('id asc');
            $listCourse = $this->course->getCoursesBy();
            $editNews = $this->news->getEditNews($id);
            $listNewsTag = $this->newTags->getListTag($id);
            if (empty($editNews)) {
                return view('Backend.Error.404');
            }
            return view('Backend.News.news-edit', compact('editNews', 'listNewsTag', 'listTags', 'listCateGroup', 'listCate', 'listCourse'));
        }else{
            Toastr()->warning('Bạn không có quyền sửa bài viết này !!');
        }
    }
    public function update(NewsRequest $request,$id){
        $updateNews = [
            'news_name' =>$request->news_name,
            'cate_group_id' =>$request->cate_group_id,
            'cate_id' =>$request->cate_id,
            'content' =>$request->content_news,
            'course_id'=>$request->course_id,
            'author_id' =>Auth::user()->id,
            'slug_news'=>Helpers::to_slug($request->news_name),
            'status'=>0
        ];

        if ($request->hasFile('new_image')) {
            $updateNews['new_image'] = Upload::getImage('new_image', 'upload/News/images', $request);
        };
        if ($request->hasFile('video_news')) {
            $updateNews['video_news'] = Upload::getImage('video_news', 'upload/News/videos', $request);
        };

        if ($news = $this->news->update($updateNews,$id)) {
            if($newTags = $request->tagID){
                $this->newTags->deleteWhere(['news_id'=>$id]);
                foreach ($newTags as $tags){
                    $updateNewsTags = [
                        'news_id'=>$id,
                        'tag_id' => $tags
                    ];
                    $this->newTags->create($updateNewsTags);
                }
            };

            return redirect()->route('news-list')->with('success', 'Thêm mới thành công ')->withInput();
        } else {
            return redirect()->back()->with('error', 'Thêm mới thất bại')->withInput();
        }
    }
    public function show($id){
        $getShowNews = $this->news->getEditNews($id);
        $listTags = $this->newTags->getListTag($id);
        if(empty($getShowNews)){
            return view('Backend.Error.404');
        }
        return view('Backend.News.news-show',compact('getShowNews','listTags'));

    }
    public function destroy($id){
        try {
            $this->news->update(['delete_flag'=>1],$id);
            return response()->json(['code' => 200]);
        } catch(\Exception $e) {
            Log::error('Something is really going wrong.' . $e->getMessage() . 'Line' . $e->getLine());
            return response()->json(['code' => 500]);
        }

    }
    public function searchNews(Request $request){
        if (Auth::user()->user_group == 1){
            $listNews = $this->news->searchNews($request->searchNews);
            $listTag = $this->newTags->listTag();
            return view('Backend.News.news-list-admin',compact('listNews','listTag'));
        }elseif(Auth::user()->user_group == 3){
            $listNews = $this->news->searchNews($request->searchNews);
            $listTag = $this->newTags->listTag();
            return view('Backend.News.news-list',compact('listNews','listTag'));
        }
    }

    public function onChangeCourseNews( Request $request ){
    $id = $request->id;
    $listCourse= $this->course->onchangeCourse($id);
    $listCoursesHTML =  view('Backend.Ajax.courseAjax',compact('listCourse'))->render();
    return response()->json( array('success' => true, 'html'=>$listCoursesHTML) );

}



}