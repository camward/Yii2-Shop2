<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 29.12.16
 * Time: 12:28
 */

namespace app\models;
use yii\db\ActiveRecord;

class Cart extends ActiveRecord
{
    public function addToCart($product, $qty = 1){
        echo 'Worked!';
    }
}