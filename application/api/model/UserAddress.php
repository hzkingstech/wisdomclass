<?php
/**
 * Created by PhpStorm.
 * User: supertaozi
 * Date: 2017-09-17
 * Time: 23:59
 */

namespace app\api\model;


class UserAddress extends BaseModel
{
    protected $hidden =['id','delete_time','user_id'];
}