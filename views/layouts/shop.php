<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use app\assets\AppAsset;
use app\assets\ltAppAsset;
use yii\helpers\Url;

AppAsset::register($this);
ltAppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="bg-top">
    <div class="bgr">
        <!--==============================header=================================-->
        <header>
            <h1><a href="<?=Url::home()?>"><img src="/images/logo.jpg" alt=""></a></h1>
            <nav>
               <ul class="menu">
                    <li><a href="<?=Url::to(['/shop/index'])?>">restaurant</a></li>
                    <li><a href="<?=Url::to(['/shop/products'])?>">products</a></li>
                   <li><a href="<?=Url::to(['/shop/search-form'])?>">search</a></li>
                   <li><a href="#" onclick="return getCart()">cart</a></li>
                    <li><a href="<?=Url::to(['/cart/view'])?>">order</a></li>
                    <li><a href="<?=Url::to(['/shop/contact'])?>">contacts</a></li>
                </ul>
                <div class="clear"></div>
            </nav>
        </header>
        <!--==============================content================================-->
        <section id="content"><div class="ic"></div>
            <div class="block-1">
                <?= \app\components\CategoryWidget::widget()?>
            </div>
            <div class="block-2 pad-2">
                <?=$content;?>
            </div>
        </section>

        <!--==============================footer=================================-->
        <footer>
            <p>Alex St © 2016</p>
        </footer>
    </div>
</div>

<?php
\yii\bootstrap\Modal::begin([
    'header' => '<h2>Корзина</h2>',
    'id' => 'cart',
    'size' => 'modal-lg',
    'footer' => '<button type="button" class="btn btn-default" data-dismiss="modal">Продолжить покупки</button>
        <a href="' . \yii\helpers\Url::to(['cart/view']) . '" class="btn btn-success">Оформить заказ</a>
        <button type="button" class="btn btn-danger" onclick="clearCart()">Очистить корзину</button>'
]);

\yii\bootstrap\Modal::end();
?>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
