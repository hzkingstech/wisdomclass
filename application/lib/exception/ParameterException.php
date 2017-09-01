<?php
/**
 * Created by PhpStorm.
 * User: supertaozi
 * Date: 2017-08-24
 * Time: 1:31
 */

namespace app\lib\exception;


class ParameterException extends BaseException
{
    public $code=400;
    public $msg='参数错误';
    public $errorCode=10000;

}