<?php
/**
 * Created by PhpStorm.
 * User: supertaozi
 * Date: 2017-09-19
 * Time: 11:22
 */

namespace app\lib\exception;


class ForbiddenException extends BaseException
{
    public $code = 403;
    public $msg = '权限不够';
    public $errorCode = 10001;
}