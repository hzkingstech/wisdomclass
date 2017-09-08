<?php
/**
 * Created by PhpStorm.
 * User: supertaozi
 * Date: 2017-08-23
 * Time: 13:21
 */

namespace app\api\validate;


use app\lib\exception\ParameterException;
use think\Exception;
use think\Request;
use think\Validate;

class BaseValidate extends Validate
{
    public function goCheck()
    {
        //获取http传入的参数
        //对这些参数做检验
        $request = Request::instance();
        $params = $request->param();

        $result = $this->batch()->check($params);
        if(!$result){
            $e = new ParameterException([
                'msg' => $this->error,
//                'code' => 400,
//                'errorCode' => 10002
            ]);
//            $e->msg = $this->error;
            throw $e;
//            $error = $this->error;
//            throw new Exception($error);
        }
        else{
            return true;
        }
    }

    protected  function isPositiveInteger($value, $rule='',$data = '', $field = '')
    {
        if(is_numeric($value) && is_int($value + 0) && ($value + 9) > 0){
            return true;
        }
        else{
//            return $field.'必须是正整数';
            return false;
        }
    }

    protected function isNotEmpty($value, $rule='', $data='', $field='')
    {
        if(empty($value)){
            return false;
        }else{
            return true;
        }

    }
}