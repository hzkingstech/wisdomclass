<?php
/**
 * Created by PhpStorm.
 * User: supertaozi
 * Date: 2017-08-22
 * Time: 2:29
 */

namespace app\api\controller\v1;

use app\api\validate\IDMustBePostiveInt;
use app\api\model\Banner as BannerModel;
use app\lib\exception\BannerMissException;
use think\Exception;

class Banner
{

    /*
     * 获取指定id的banner信息
     * @url /banner/:id
     * @http GET
     * @id banner的id号
     * */

    public function getBanner($id)
    {
        (new IDMustBePostiveInt())->goCheck();

//        $banner = BannerModel::get($id);
//        $banner = BannerModel::with(['items','items.img'])->find($id);
//        $banner->hidden('update_time');       //隐藏update_time、delete_time字段

        $banner = BannerModel::getBannerByID($id);        //通过getBannerById获取对象
//        $banner->hidden(['update_time']);             //直接隐藏模型中的字段

        if(!$banner) {
            throw new BannerMissException();
        }
        $c = config('setting.img_prefix');
        return json($banner);
    }
}