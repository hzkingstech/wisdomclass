<?php
/**
 * Created by PhpStorm.
 * User: supertaozi
 * Date: 2017-09-06
 * Time: 1:51
 */

namespace app\api\controller\v1;


use app\api\service\UserToken;
use app\api\validate\TokenGet;

class Token
{
    public function getToken($code='')
    {
        (new TokenGet())->goCheck();
        $ut = new UserToken($code);
        $token = $ut->get();
        return [
            'token'=>$token
            ];
    }
}