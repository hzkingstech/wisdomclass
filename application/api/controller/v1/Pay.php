<?php
/**
 * Created by PhpStorm.
 * User: supertaozi
 * Date: 2018-03-01
 * Time: 23:23
 */

namespace app\api\controller\v1;


use app\api\controller\BaseController;
use app\api\validate\IDMustBePostiveInt;
use app\api\service\Pay as PayService;

class Pay extends BaseController
{
    protected $beforeActionList = [
        'checkExclusiveScope' => ['only' => 'getPreOrder']
    ];

    public function getPreOrder($id='')
    {
        (new IDMustBePostiveInt())->goCheck();
        $pay = new PayService($id);
        return $pay->pay();
    }
}