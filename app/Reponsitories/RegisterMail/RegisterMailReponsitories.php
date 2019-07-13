<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 01-Jun-19
 * Time: 3:00 PM
 */

namespace App\Reponsitories\RegisterMail;


use App\Model\RegisterMail;
use App\Reponsitories\BaseRepository;

class RegisterMailReponsitories extends BaseRepository
{
    public function getModel()
    {
        return RegisterMail::class;
    }
}