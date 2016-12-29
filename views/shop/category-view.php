<div class="block-4 col-3">
    <div class="h2">
        <h2 class="h2-line-2"><?=$cat[0]->name?>:</h2>
    </div>
    <div class="box-4">
        <?foreach($products as $product):?>
            <div>
                <h4><?=$product->name?></h4>
                <div class="img-border">
                    <a href="<?= \yii\helpers\Url::to(['shop/products-view', 'id' => $product->id]) ?>">
                        <?= \yii\helpers\Html::img("@web/images/{$product->images}", ['alt' => $product->name])?></div>
                    </a>
                <p class="border-2"><?=$product->description?></p>
                <p><?=$product->price?> rub.
                    <a href="<?= \yii\helpers\Url::to(['cart/add', 'id' => $product->id])?>" data-id="<?= $product->id?>" class="link add-to-cart">Add to cart</a>
                </p>
            </div>
        <?endforeach;?>
    </div>
</div>