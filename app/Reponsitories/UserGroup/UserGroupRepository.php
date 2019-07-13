<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 18-Apr-19
 * Time: 8:44 PM
 */

namespace App\Reponsitories\UserGroup;
use App\Reponsitories\BaseRepository;
use App\Model\UserGroup;

class UserGroupRepository extends BaseRepository
{
    public function getModel()
    {
        return UserGroup::class;
    }
}