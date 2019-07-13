<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 19-Jun-19
 * Time: 10:18 AM
 */

namespace App\Reponsitories\Comments;


use App\Model\Comments;
use App\Reponsitories\BaseRepository;

class CommentsReponsitories extends BaseRepository
{
    public function getModel()
    {
        return Comments::class;
    }

    public function getCommentCourse($id){
        return $this->model
                ->leftJoin('l_customers','l_customers.id','l_comments.author_id')
                ->where('l_comments.course_id',$id)
                ->where('l_comments.status',0)
                ->select('l_customers.full_name','l_customers.avatar','l_comments.content','l_customers.id','l_customers.slug_customer',
                    'l_comments.id as comment_id')
                ->get();
    }
}