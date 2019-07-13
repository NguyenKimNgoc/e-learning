<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 16-Jun-19
 * Time: 3:10 PM
 */

namespace App\Http\Controllers\Backend;


use App\Http\Controllers\Controller;
use App\Http\Requests\BlogsRequest;
use App\Reponsitories\Blog\BlogReponsitories;
use App\Reponsitories\BlogTags\BlogTagsReponsitories;
use App\Reponsitories\CategoriesGroup\CategoriesGroupReponsitories;
use App\Reponsitories\Tags\TagsReponsitories;
use Illuminate\Support\Facades\Auth;
use App\Upload;
use App\Helpers\Helpers;
use Yoeunes\Toastr\Toastr;

class BlogsController extends Controller
{
    public function __construct(
        CategoriesGroupReponsitories $cateGroup,
        TagsReponsitories $tags,
        BlogTagsReponsitories $blogTags,
        BlogReponsitories $blog
    )
    {
        $this->cateGroup = $cateGroup;
        $this->tags = $tags;
        $this->blogTags = $blogTags;
        $this->blog = $blog;
    }

    public function index(){
        $listBlog = $this->blog->getBlog();
        $listTagsBlog = $this->blogTags->getTagsBlog();
        return view('Backend.Blogs.list',compact('listBlog','listTagsBlog'));
    }
    public function create(){
        $listCateGroup = $this->cateGroup->getCateGroup();
        $listTags = $this->tags->all('id asc');
        return view('Backend.Blogs.add',compact('listCateGroup','listTags'));
    }
    public function store(BlogsRequest $request){
        $addBlog = [
            'author_id'=>Auth::user()->id,
            'cate_group_id'=>$request->cate_group_id,
            'blog_title'=>$request->blog_title,
            'sub_title'=>$request->sub_title,
            'slug_blog'=>Helpers::to_slug($request->blog_title),
            'content_blog'=>$request->content_blog
        ];
        if ($request->hasFile('images_blog')) {
            $addBlog['images_blog'] = Upload::getImage('images_blog', 'upload/blog/images', $request);
        }
        if ($blog = $this->blog->create($addBlog)) {
            if($blogTags = $request->tagID){
                foreach ($blogTags as $tags){
                    $addBlogTags = [
                        'blog_id'=>$blog->id,
                        'blog_tags' => $tags
                    ];
                    $this->blogTags->create($addBlogTags);
                }
            };
            return redirect()->route('blog-list')->with('success', 'Thêm mới thành công ')->withInput();
        } else {
            return redirect()->back()->with('error', 'Thêm mới thất bại')->withInput();
        }
    }
    public function edit($id){
        $listCateGroup = $this->cateGroup->all('id asc');
        $listTags = $this->tags->all('id asc');
        $listTagsBlog = $this->blogTags->getTagsBlog();
        $editBlog = $this->blog->getEditBlog($id);
        return view('Backend.Blogs.edit',compact('listTags','listCateGroup','editBlog','listTagsBlog'));
    }
    public function update(BlogsRequest $request,$id){
        $updateBlog = [
            'author_id'=>Auth::user()->id,
            'cate_group_id'=>$request->cate_group_id,
            'blog_title'=>$request->blog_title,
            'sub_title'=>$request->sub_title,
            'slug_blog'=>Helpers::to_slug($request->blog_title),
            'content_blog'=>$request->content_blog
        ];
        if ($request->hasFile('images_blog')) {
            $updateBlog['images_blog'] = Upload::getImage('images_blog', 'upload/blog/images', $request);
        };
        if ($blog = $this->blog->update($updateBlog,$id)) {
            if($blogTags = $request->tagID){
                $this->blogTags->deleteWhere(['blog_id'=>$id]);
                foreach ($blogTags as $tags){
                    $addBlogTags = [
                        'blog_id'=>$id,
                        'blog_tags' => $tags
                    ];
                    $this->blogTags->create($addBlogTags);
                }
            };
            Toastr()->success('Cập nhật thành công');
            return redirect()->route('blog-list');
        } else {
            return redirect()->back()->with('error', 'Thêm mới thất bại')->withInput();
        }
    }
    public function show(){

    }
    public function destroy(){

    }
}