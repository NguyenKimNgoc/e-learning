<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 27-Apr-19
 * Time: 9:24 PM
 */

namespace App\Reponsitories\Banner;
use App\Model\Banner;
use App\Reponsitories\BaseRepository;

class BannerRepositories extends BaseRepository
{
    public function getModel()
    {
        return Banner::class;
    }
    public function getListBanner(){
        return $this->model
            ->leftJoin('l_banner_type','l_banner.banner_type_id','=','l_banner_type.id')
            ->where('l_banner.delete_flag',0)
            ->select('l_banner.*','l_banner_type.name as type_banner')
            ->orderBy('id','desc')
            ->paginate(10);
    }
    public function getBanner(){
        return $this->model
            ->where('l_banner.delete_flag',0)
            ->where('l_banner.point',2)
            ->select('l_banner.*')
            ->orderBy('id','desc')
            ->first();
    }
}