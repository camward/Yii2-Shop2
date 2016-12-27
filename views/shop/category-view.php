<div class="block-4 col-3">
    <div class="h2">
        <h2 class="h2-line-2"><?=$cat[0]->name?>:</h2>
    </div>
    <div class="box-4">
        <?foreach($products as $product):?>
            <div>
                <h4><?=$product->name?></h4>
                <div class="img-border"><?= \yii\helpers\Html::img("@web/images/{$product->images}", ['alt' => $product->name])?></div>
                <p class="border-2"><?=$product->description?></p>
                <p><?=$product->price?> rub. <a href="#" class="link">buy</a></p>
            </div>
        <?endforeach;?>
    </div>
</div>