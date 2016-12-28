<?php
use yii\helpers\Html;
?>
<div class="block-4 col-3">
    <div class="h2">
        <h2 class="h2-line-2">
            <form method="get" action="<?= \yii\helpers\Url::to(['shop/search'])?>">
                <input class="s_form" type="text" placeholder="Search" name="q">
            </form>
        </h2>
    </div>
    <p class="center"><span class="clr-1 it-bold">
            Поиск по запросу: <?= Html::encode($q)?>
    </p><br /><br />
    <div class="box-4">
        <?foreach($products as $product):?>
            <div>
                <h4><?=$product->name?></h4>
                <div class="img-border">
                    <a href="<?= \yii\helpers\Url::to(['shop/products-view', 'id' => $product->id]) ?>">
                        <?= \yii\helpers\Html::img("@web/images/{$product->images}", ['alt' => $product->name])?>
                    </a>
                </div>
                <p class="border-2"><?=$product->description?></p>
                <p><?=$product->price?> rub. <a href="#" class="link">buy</a></p>
            </div>
        <?endforeach;?>
    </div>
    <?php echo \yii\widgets\LinkPager::widget(['pagination' => $pages]); ?>
</div>