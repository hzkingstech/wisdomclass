<?php
/**
 * Created by PhpStorm.
 * User: supertaozi
 * Date: 2017-09-05
 * Time: 9:36
 */

namespace app\lib\exception;


class CategoryException extends BaseException
{
    public $code = 404;
    public $msg = '指定的类目不存在，请检查参数';
    public $errorCode = 50000;
}