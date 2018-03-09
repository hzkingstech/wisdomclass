<?php
/**
 * Created by PhpStorm.
 * User: supertaozi
 * Date: 2017-10-16
 * Time: 0:41
 */

namespace app\api\model;


class StuInfo extends BaseModel
{
    public function getStuScores(){
        return $this->hasMany('StuScore','uid','id');
    }
}