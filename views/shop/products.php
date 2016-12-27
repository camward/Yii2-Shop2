<div class="block-4 col-3">
    <div class="h2">
        <h2 class="h2-line-2">All Products:</h2>
    </div>
    <p class="center"><span class="clr-1 it-bold">Vivamus hendrerit mauris ut dui gravida ut viverra lectus incidunt. Cras mattis tempor eros nec tristique.Sed sed felis arcu, vel vehicula augue.<br> Maecenas faucibus sagittis cursus. </span><br>
        Fusce tincidunt, tellus eget tristique cursus, orci mi iaculis. sem, sit amet dictum velit velit eu magna. Nunc viverra nisi sed orci tincidunt at hendrerit orci luctus. Suspendisse tincidunt, ipsum at semper facilisis, turpis nisi dictum diam, nec tincidunt neque velit in nunc. Fusce sed leo sapien. Vestibulum non nunc ac tellus sollicitudin iaculis.<br /></p><br />
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