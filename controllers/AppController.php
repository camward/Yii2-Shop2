<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 26.12.16
 * Time: 17:51
 */

namespace app\controllers;

use yii\web\Controller;

class AppController extends Controller
{
    public function debug($arr){
        echo "<pre>";
        print_r($arr);
        echo "</pre>";
    }
}

function debug($arr){
    echo "<pre>";
    print_r($arr);
    echo "</pre>";
}