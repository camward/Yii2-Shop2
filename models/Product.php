<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 27.12.16
 * Time: 19:21
 */

namespace app\models;

use yii\db\ActiveRecord;

class Product extends ActiveRecord
{
    public static function tableName(){
        return "product";
    }
}