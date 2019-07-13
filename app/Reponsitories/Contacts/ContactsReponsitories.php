<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 26-May-19
 * Time: 11:11 PM
 */

namespace App\Reponsitories\Contacts;


use App\Model\Contacts;
use App\Reponsitories\BaseRepository;

class ContactsReponsitories extends BaseRepository
{
    public function getModel()
    {
        return Contacts::class;
    }
    public function getListContacts(){
        return $this->model
                ->where('l_contacts.deleted_flag',0)
                ->paginate(15);
    }
}