<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 27-Apr-19
 * Time: 9:23 PM
 */

namespace App\Reponsitories\TypeBanner;
use App\Model\BannerType;
use App\Reponsitories\BaseRepository;

class TypeBannerRepositories extends BaseRepository
{
    public function getModel()
    {
        return BannerType::class;
    }
}