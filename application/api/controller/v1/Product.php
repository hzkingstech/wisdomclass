<?php
/**
 * Created by PhpStorm.
 * User: supertaozi
 * Date: 2017-09-05
 * Time: 1:24
 */

namespace app\api\controller\v1;


use app\api\validate\Count;
use app\api\model\Product as ProductModel;
use app\api\validate\IDMustBePostiveInt;
use app\lib\exception\ProductException;

class Product
{
    public function getRecent($count=15){
        (new Count())->goCheck();
        $products = ProductModel::getMostRecent($count);
        if(!$products->isEmpty()){
            throw new ProductException();
        }
        //$collection = collection($products);    //在database.php中设置数据返回类型以后，就不需要将数组转换成数据集了
        $products = $products->hidden(['summary']);
        return $products;

    }

    public function getAllInCategory($id){
        (new IDMustBePostiveInt())->goCheck();
        $products = ProductModel::getProductsByCategoryID($id);
        if($products->isEmpty()){
            throw new ProductException();
        }
//        $collection = collection($products);
        $products = $products->hidden(['summary']);
        return $products;
    }

    public function getOne($id)
    {
        (new IDMustBePostiveInt())->goCheck();
        $product = ProductModel::getProductDetail($id);
        if(!$product){
            throw new ProductException();
        }
        return $product;
    }
}