<?php
/**
 * Created by PhpStorm.
 * User: supertaozi
 * Date: 2017-09-06
 * Time: 1:53
 */

namespace app\api\validate;


class TokenGet extends BaseValidate
{
    protected $rule = [
        'code'=>'require|isNotEmpty'
    ];

    protected $message = [
        'code'=>'没有code还想获得Token，做梦哦'
    ];
}