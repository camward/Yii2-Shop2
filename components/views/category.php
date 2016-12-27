<?
$cnt = 0;
foreach($cat as $ct):
$cnt++;
?>
    <div class="border-right" <?if($cnt == 4):?>style="border-right: 0;"<?endif;?>>
        <div class="block-1-title">
            <span><?=$cnt?>.</span>
            <div class="text-1"><?=$ct['name']?></div>
            <strong class="clear"></strong>
        </div>
        <p class="border-1"><?=$ct['description']?></p>
        <a href="<?= \yii\helpers\Url::to(['shop/category-view', 'id' => $ct['id']]) ?>" class="link-1">all products</a>
    </div>
<?endforeach;?>