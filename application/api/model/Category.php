<?php
/**
 * Created by PhpStorm.
 * User: supertaozi
 * Date: 2017-09-05
 * Time: 9:30
 */

namespace app\api\model;


class Category extends BaseModel
{
    protected $hidden = ['delete_time','update_time','create_time'];

    public function Img(){
        return $this->belongsTo('Image','topic_img_id','id');
    }
}