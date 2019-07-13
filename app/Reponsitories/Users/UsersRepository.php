<?php
namespace App\Reponsitories\Users;

use App\Model\Users;
use App\Reponsitories\BaseRepository;

class UsersRepository extends BaseRepository
{

    public function getModel()
    {
        return Users::class;
    }
    public function listIndex()
    {
        return $this->model
            ->leftJoin('l_user_group','l_users.user_group','=','l_user_group.id')
            ->leftJoin('l_user_industries','l_users.industries','=','l_user_industries.id')
            ->leftJoin('l_user_major','l_users.major','=','l_user_major.id')
            ->where('l_users.delete_flag',0)
            ->select('l_users.*','l_user_group.name','l_user_major.name as major_name','l_user_industries.name as industries_name')
            ->orderBy('id','desc')
            ->paginate(20);
    }
    public function checkMail($mail){
        return $this->model->where('email',$mail)->first();
    }
    public function showUser($id)
    {
        return $this->model
            ->leftJoin('l_user_group','l_users.user_group','=','l_user_group.id')
            ->leftJoin('l_user_industries','l_users.industries','=','l_user_industries.id')
            ->leftJoin('l_user_major','l_users.major','=','l_user_major.id')
            ->where('l_users.id',$id)
            ->select('l_users.*','l_user_group.name','l_user_major.name as major_name','l_user_industries.name as industries_name')
            ->first();
    }
    public function searchUser($search){
        return $this->model
                ->leftJoin('l_user_group','l_users.user_group','=','l_user_group.id')
                ->leftJoin('l_user_industries','l_users.industries','=','l_user_industries.id')
                ->leftJoin('l_user_major','l_users.major','=','l_user_major.id')
                ->where('l_users.full_name', 'like', '%' . $search . '%')
                ->orWhere('l_users.phone', 'like', '%' . $search . '%')
                ->orWhere('l_users.email', 'like', '%' . $search . '%')
                ->orWhere('l_user_industries.name', 'like', '%' . $search . '%')
                ->orWhere('l_user_major.name', 'like', '%' . $search . '%')
                ->select('l_users.*','l_user_group.name','l_user_major.name as major_name','l_user_industries.name as industries_name')
                ->orderBy('id','desc')
                ->paginate(20);
    }




}