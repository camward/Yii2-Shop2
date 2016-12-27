<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 27.12.16
 * Time: 18:22
 */

namespace app\components;

use Yii;
use app\models\Category;
use yii\base\Widget;

class CategoryWidget extends Widget
{
    public function run(){
        $cat = Yii::$app->cache->get('category_widget');
        if(empty($cat)){
            $cat = Category::find()->indexBy('id')->asArray()->all();
            Yii::$app->cache->set('category_widget', $cat, 60*60*24);
        }
        return $this->render('category', compact('cat'));
    }
}