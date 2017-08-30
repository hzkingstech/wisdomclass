<?php
/**
 * Created by PhpStorm.
 * User: supertaozi
 * Date: 2017-08-23
 * Time: 14:22
 */

namespace app\lib\exception;


class BannerMissException extends BaseException
{
    //HTTP 状态码 404，200
    public $code = 404;

    //错误具体信息
    public $msg = '请求的Banner不存在';

    //自定义的错误码
    public $errorCode = 40000;
}