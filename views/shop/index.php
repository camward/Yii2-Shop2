<div class="col-1" style="margin-top: 30px;" xmlns="http://www.w3.org/1999/html">
    <h2 class="h2-line">We are glad to invite you!<strong>The place where you feel bliss</strong></h2>
    <div class="box-1">
        <div class="img-border img-indent"><img src="/images/page1-img1.jpg" alt=""></div>
        <div class="extra-wrap">
            <p class="it-bold p2">Valencia is one of <a href="javascript:void(0)" class="link">free website templates</a> created by TemplateMonster.com team. This website template is optimized for 1280X1024 screen resolution. </p>
            <p class="border-1">The PSD source files of this <a href="javascript:void(0)" class="link">Valencia</a><br> template are available for free for the<br> registered members of TemplateMonster.com. Feel free to get them! Vivamus hendrerit<br> mauris ut dui gravida ut viverra lectus <br>incidunt. </p>
            <a href="javascript:void(0)" class="link-1">read more</a>
        </div>
    </div>
</div>
<div class="col-2 left-2" style="margin-top: 30px;">
    <h3 class="h3-line top-1">Testimonials:</h3>
    <div class="box-2 top-2">
        <div class="comment border-1">
            <p><img src="/images/comment-top.png" alt="" ><span class="clr-1">Vivamus hendrerit mauris ut dui</span> gravida ut viverra lectus incidunt. Cras mattis tempor eros nec tristique. Sed sed felis arcu, vel vehicula.<img src="/images/comment-bottom.png" alt="" class="second"></p>
            <span class="clr-1"><strong>Tina Smith</strong> <i>(top manager)</i></span>
        </div>
        <div class="comment border-1 top-3">
            <p><img src="/images/comment-top.png" alt="" ><span class="clr-1">Vivamus hendrerit mauris ut dui</span> gravida ut viverra lectus incidunt. Cras mattis tempor eros nec tristique. Sed sed felis arcu, vel vehicula.<img src="/images/comment-bottom.png" alt="" class="second"></p>
            <span class="clr-1"><strong>John Green</strong> <i>(director)</i></span>
        </div>
        <a href="javascript:void(0)" class="link-1">read more</a>
    </div>
</div>
<div class="clear"></div>
<div class="block-3">
    <div class="h3">
        <h3 class="h3-line-2">Most delicious:</h3>
    </div>
    <div class="box-3">
        <?foreach($hits as $hit):?>
            <div>
                <div class="img-border">
                    <a href="<?= \yii\helpers\Url::to(['shop/products-view', 'id' => $hit->id]) ?>">
                        <?= \yii\helpers\Html::img("@web/images/{$hit->images}", ['alt' => $hit->name])?></div>
                    </a>
                <p class="border-2"><?=$hit->description?></p>
                <p><?=$hit->price?> rub. <a href="#" class="link">buy</a></p>
            </div>
        <?endforeach;?>
    </div>
</div>
