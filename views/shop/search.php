<?php
use yii\helpers\Html;
?>
<div class="block-4 col-3">
    <div class="h2">
        <h2 class="h2-line-2">
            <form method="get" action="<?= \yii\helpers\Url::to(['shop/search'])?>">
                <input class="form-control" type="text" placeholder="Search" name="q">
            </form>
        </h2>
    </div>
    <p class="center"><span class="clr-1 it-bold">
            Поиск по запросу: <?= Html::encode($q)?>
    </p><br /><br />
    <div class="box-4">
        <?php if(!empty($products)): ?>
            <?foreach($products as $product):?>
                <div>
                    <h4><?=$product->name?></h4>
                    <div class="img-border">
                        <a href="<?= \yii\helpers\Url::to(['shop/products-view', 'id' => $product->id]) ?>">
                            <?= \yii\helpers\Html::img("@web/images/{$product->images}", ['alt' => $product->name])?>
                        </a>
                    </div>
                    <p class="border-2"><?=$product->description?></p>
                    <p><?=$product->price?> rub.
                        <a href="<?= \yii\helpers\Url::to(['cart/add', 'id' => $product->id])?>" data-id="<?= $product->id?>" class="link add-to-cart">Add to cart</a>
                    </p>
                </div>
            <?endforeach;?>
        <?php else: ?>
            <h3>Результатов нет</h3>
        <?php endif;?>
    </div>
    <?php echo \yii\widgets\LinkPager::widget(['pagination' => $pages]); ?>
</div>