<div class="col-4">
    <h3 class="h3-line"><?=$products[0]->name?></h3>
    <div class="img-border pad-3"><?= \yii\helpers\Html::img("@web/images/{$products[0]->images}", ['alt' => $products[0]->name])?></div>
    <p class="border-1"><?=$products[0]->description?></p>
    <p><?=$products[0]->price?> rub. <a href="#" class="link-1">buy</a></p>
</div>
<div class="col-5 left-2">
    <h2 class="h2-line-3">Wine list</h2>
    <div class="wrap">
        <ul class="list">
            <li><strong>Lorem ipsum</strong><span>$25.30</span><em>&nbsp;</em></li>
            <li><strong>Dolor sit amet</strong><span>$30.80</span><em>&nbsp;</em></li>
            <li><strong>Consectetur adipiscing</strong><span>$50.90</span><em>&nbsp;</em></li>
            <li><strong>Vivamus sed</strong><span>$75.50</span><em>&nbsp;</em></li>
            <li><strong>Vivamus hendrerit</strong><span>$120.60</span><em>&nbsp;</em></li>
            <li><strong>Mauris gravida</strong><span>$95.70</span><em>&nbsp;</em></li>
            <li><strong>Viverra lectus</strong><span>$45.74</span><em>&nbsp;</em></li>
            <li><strong>Cras mattis</strong><span>$37.45</span><em>&nbsp;</em></li>
            <li><strong>Maecenas faucibus</strong><span>$45.90</span><em>&nbsp;</em></li>
            <li><strong>Sagittis cursus</strong><span>$25.80</span><em>&nbsp;</em></li>
            <li><strong>Fusce tincidunt</strong><span>$90.37</span><em>&nbsp;</em></li>
            <li><strong>Tellus eget tristique</strong><span>$87.60</span><em>&nbsp;</em></li>
            <li><strong>Amet dictum</strong><span>$37.80</span><em>&nbsp;</em></li>
        </ul>
        <ul class="list last">
            <li><strong>Mauris gravida</strong><span>$95.90</span><em>&nbsp;</em></li>
            <li><strong>Viverra lectus</strong><span>$45.25</span><em>&nbsp;</em></li>
            <li><strong>Cras mattis</strong><span>$37.85</span><em>&nbsp;</em></li>
            <li><strong>Tempor eros</strong><span>$78.40</span><em>&nbsp;</em></li>
            <li><strong>Sed vehicula augue</strong><span>$56.78</span><em>&nbsp;</em></li>
        </ul>
    </div>
</div>