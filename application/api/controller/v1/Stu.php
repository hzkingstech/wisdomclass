<?php
/**
 * Created by PhpStorm.
 * User: supertaozi
 * Date: 2017-10-16
 * Time: 0:47
 */

namespace app\api\controller\v1;


use app\api\controller\BaseController;
use app\api\model\StuInfo as StuInfoModel;
class Stu extends BaseController
{
    public function getScores()
    {
        $stuInfo =getStuScores::get(1);

        dump($stuInfo);
    }
}