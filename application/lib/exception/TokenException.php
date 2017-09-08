<?php
/**
 * Created by PhpStorm.
 * User: supertaozi
 * Date: 2017-09-06
 * Time: 14:06
 */

namespace app\lib\exception;


class TokenException extends BaseException
{
    public $code = 401;
    public $msg = 'Token已过期或无效Token';
    public $errorCode = 10001;
}