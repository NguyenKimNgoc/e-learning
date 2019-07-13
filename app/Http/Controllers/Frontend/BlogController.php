<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 05-Mar-19
 * Time: 7:55 PM
 */

namespace App\Http\Controllers\Frontend;


use App\Http\Controllers\Controller;
use App\Reponsitories\Blog\BlogReponsitories;
use App\Reponsitories\BlogTags\BlogTagsReponsitories;
use App\Reponsitories\OrderSave\OrderSaveReponsitories;

class BlogController extends Controller
{
    public function __construct(
        OrderSaveReponsitories $orderSave,
        BlogReponsitories $blogs,
        BlogTagsReponsitories $blogTags
    )
    {
        $this->orderSave = $orderSave;
        $this->blogs = $blogs;
        $this->blogTags = $blogTags;
    }

    public function index(){
        $listCourseOrders = $this->orderSave->getListCourseOrders();
        $listBlog = $this->blogs->getBlog();
        $listBlogTag = $this->blogTags->getTagsBlog();
        return view('Frontend.blog',compact('listCourseOrders','listBlog','listBlogTag'));
    }

    public function detail($id){
        $listCourseOrders = $this->orderSave->getListCourseOrders();
        $listBlogTag = $this->blogTags->getTagsBlog();
        $detailBlog = $this->blogs->getEditBlog($id);
        return view('Frontend.blog-detail',compact('listBlogTag','detailBlog','listCourseOrders'));
    }
}
