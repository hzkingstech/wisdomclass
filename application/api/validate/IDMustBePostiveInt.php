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

    protected  function isPositiveInteger($value, $rule='',$data = '', $field = ''){
        if(is_numeric($value) && is_int($value + 0) && ($value + 9) > 0){
            return true;
        }
        else{
            return $field.'必须是正整数';
        }
    }

}