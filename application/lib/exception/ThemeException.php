<?php
/**
 * Created by PhpStorm.
 * User: supertaozi
 * Date: 2017-09-04
 * Time: 14:24
 */

namespace app\lib\exception;


class ThemeException extends BaseException
{
    public $code = 404;
    public $msg = '指定主题不存在，请检查主题ID';
    public $errorCode = 30000;
}