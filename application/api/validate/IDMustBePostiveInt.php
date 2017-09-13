<?php
/**
 * Created by PhpStorm.
 * User: supertaozi
 * Date: 2017-08-23
 * Time: 13:20
 */

namespace app\api\validate;


class IDMustBePostiveInt extends BaseValidate
{
    protected $rule = [
        'id' => 'require|isPositiveInteger',
        'num' =>'in:1,2,3',
    ];

    protected $message = [
        'id' => 'id必须是正整数'
    ];



}