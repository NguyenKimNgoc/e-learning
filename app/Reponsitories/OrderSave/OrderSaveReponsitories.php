<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 17-Jun-19
 * Time: 11:43 PM
 */

namespace App\Reponsitories\OrderSave;


use App\Model\OrderSave;
use App\Reponsitories\BaseRepository;

class OrderSaveReponsitories extends BaseRepository
{
    public function getModel()
    {
        return OrderSave::class;
    }
    public function getListCourseOrders(){
        return $this->model
            ->leftJoin('l_orders','l_orders_save.order_code','=','l_orders.order_code')
            ->leftJoin('l_courses','l_orders_save.course_id','l_courses.id')
            ->leftJoin('l_category_group','l_courses.c_type_course','=','l_category_group.id')
            ->leftJoin('l_users','l_courses.c_author_id','l_users.id')
            ->where('l_courses.delete_flag',0)
            ->where('l_courses.status',1)
            ->select('l_courses.*','l_category_group.name as type_course','l_users.id as user_id','l_users.full_name','l_users.avatar','l_users.slug_user')
            ->groupBy('l_orders_save.course_id')->havingRaw('COUNT(*) > 5')
            ->get();
    }
}