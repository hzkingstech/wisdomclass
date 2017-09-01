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

class Banner extends Model
{
    public static function getBannerByID($id){
        //TODO:根据Banner ID号 获取Banner信息
//        $result = Db::query('select * from banner_item where banner_id=?',[$id]);
//        return $result;
        $result = Db::table('banner_item')->where('banner_id','=',$id)->select();
        return $result;
    }
}