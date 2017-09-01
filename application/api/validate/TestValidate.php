<?php
/**
 * Created by PhpStorm.
 * User: supertaozi
 * Date: 2017-08-22
 * Time: 10:33
 */

namespace app\api\validate;


use think\Validate;

class TestValidate extends Validate
{
    protected $rule = [
        'name' => 'require|max:10',
        'email'=>'email'
    ];

    protected $message = [
        'name.require' => '必须有名称',
        'name.max' => '名称最多不能超过10个字符',
        'email' => '邮箱格式错误',
    ];

}