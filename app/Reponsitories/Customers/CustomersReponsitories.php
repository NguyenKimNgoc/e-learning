<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 09-May-19
 * Time: 10:32 PM
 */

namespace App\Reponsitories\Customers;


use App\Model\Customers;
use App\Reponsitories\BaseRepository;

class CustomersReponsitories extends BaseRepository
{
    public function getModel()
    {
        return Customers::class;
    }

    public function checkMail($mail)
    {
        return $this->model->where('l_customers.email', $mail)->first();
    }
    public function getProfile($id){
        return $this->model
            ->leftJoin('l_cities','l_customers.city_id','l_cities.id')
            ->where('l_customers.id', $id)
            ->where('l_customers.deleted_flag',0)
            ->select('l_customers.*','l_cities.name')
            ->first();
    }
}