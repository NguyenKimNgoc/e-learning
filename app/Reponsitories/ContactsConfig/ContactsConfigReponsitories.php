<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 26-May-19
 * Time: 11:11 PM
 */

namespace App\Reponsitories\ContactsConfig;


use App\Model\ContactsConfig;
use App\Reponsitories\BaseRepository;

class ContactsConfigReponsitories extends BaseRepository
{
    public function getModel()
    {
        return ContactsConfig::class;
    }
    public function getContactsConfig(){
        return $this->model
            ->where('l_contacts_config.delete_flag',0)
            ->first();
    }
}