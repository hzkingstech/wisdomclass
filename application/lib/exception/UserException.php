<?php
/**
 * Created by PhpStorm.
 * User: supertaozi
 * Date: 2017-09-09
 * Time: 1:58
 */

namespace app\api\validate;


use app\lib\exception\BaseException;

class UserException extends BaseException
{
    public $code = 404;
    public $msg = '用户不存在';
    public $errorCode = 60000;
}