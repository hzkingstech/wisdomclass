<?php
/**
 * Created by PhpStorm.
 * User: supertaozi
 * Date: 2017-09-07
 * Time: 13:02
 */

namespace app\api\model;


class ProductImage extends BaseModel
{
    protected $hidden = ['img_id','delete_time','product_id'];

    public function imgUrl()
    {
        return $this->belongsTo('Image','img_id','id');
    }
}