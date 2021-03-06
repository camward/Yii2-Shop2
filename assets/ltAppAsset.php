<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class ltAppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/ie.css',
    ];
    public $js = [
        'js/html5.js'
    ];
    public $jsOptions = [
        'condition' => 'if lt IE 9',
        'position' => \yii\web\View::POS_HEAD
    ];
}
