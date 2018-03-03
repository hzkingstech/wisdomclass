<?php
/**
 * Created by PhpStorm.
 * User: supertaozi
 * Date: 2017-08-23
 * Time: 13:23
 */

namespace app\api\model;

use think\Db;
use think\Exception;
use think\Model;


class Banner extends BaseModel
{
    protected $hidden = ['update_time','delete_time'];

    public function items(){
        return $this->hasMany('BannerItem','banner_id','id');
    }

    public static function getBannerByID($id){
        //TODO:根据Banner ID号 获取Banner信息
//        $result = Db::query('select * from banner_item where banner_id=?',[$id]);
//        return $result;
//        $result = Db::table('banner_item')->where('banner_id','=',$id)->select();
//        return $result;
        $banner = self::with(['items','items.img'])->find($id);
        return $banner;
    }
}