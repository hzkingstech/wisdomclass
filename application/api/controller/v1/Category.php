<?php
/**
 * Created by PhpStorm.
 * User: supertaozi
 * Date: 2017-09-05
 * Time: 9:29
 */

namespace app\api\controller\v1;

use app\api\model\Category as CategoryModel;
use app\lib\exception\CategoryException;

class Category
{
    public function getAllCategories(){
        $categories = CategoryModel::all([],'img');
        if(!$categories){
            throw new CategoryException();
        }
        return $categories;
    }
}