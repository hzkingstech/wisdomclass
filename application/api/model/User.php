<?php
/**
 * Created by PhpStorm.
 * User: supertaozi
 * Date: 2017-09-06
 * Time: 2:02
 */

namespace app\api\model;


class User  extends BaseModel
{
    public static function getByOpenID($openid){
        $user = self::where('openid','=',$openid)->find();
        return $user;
    }

    public function address(){
        return $this->hasOne('userAddress','user_id','id');
    }
}