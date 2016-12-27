<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 27.12.16
 * Time: 18:23
 */

namespace app\models;

use yii\db\ActiveRecord;

class Category extends ActiveRecord
{
    public static function tableName(){
        return "category";
    }

    public function getProducts(){
        return $this->hasMany(Product::className(), ['category_id' => 'id']);
    }
}