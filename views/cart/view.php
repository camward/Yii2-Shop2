<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>
<div style="margin-top: 20px;">
    <?php if( Yii::$app->session->hasFlash('success') ): ?>
        <div class="alert alert-success alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <?php echo Yii::$app->session->getFlash('success'); ?>
        </div>
    <?php endif;?>

    <?php if( Yii::$app->session->hasFlash('error') ): ?>
        <div class="alert alert-danger alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <?php echo Yii::$app->session->getFlash('error'); ?>
        </div>
    <?php endif;?>
    <?php if(!empty($session['cart'])): ?>
        <div class="table-responsive">
            <table class="table table-hover table-striped">
                <thead>
                <tr>
                    <th>Фото</th>
                    <th>Наименование</th>
                    <th>Кол-во</th>
                    <th>Цена</th>
                    <th>Сумма</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach($session['cart'] as $id => $item):?>
                    <tr>
                        <td>
                            <a href="<?= \yii\helpers\Url::to(['shop/products-view', 'id' => $id]) ?>">
                                <?= \yii\helpers\Html::img("@web/images/{$item['images']}", ['alt' => $item['name'], 'height' => 50]) ?>
                            </a>
                        </td>
                        <td><?= $item['name']?></td>
                        <td><?= $item['qty']?></td>
                        <td><?= $item['price']?> rub.</td>
                        <td><?= $item['qty'] * $item['price']?></td>
                    </tr>
                <?php endforeach?>
                <tr>
                    <td colspan="4">Итого: </td>
                    <td><?= $session['cart.qty']?></td>
                </tr>
                <tr>
                    <td colspan="4">На сумму: </td>
                    <td><?= $session['cart.sum']?> rub.</td>
                </tr>
                </tbody>
            </table>
        </div>
        <hr/>
        <?php $form = ActiveForm::begin()?>
        <?= $form->field($order, 'name')?>
        <?= $form->field($order, 'email')?>
        <?= $form->field($order, 'phone')?>
        <?= $form->field($order, 'address')?>
        <?= Html::submitButton('Заказать', ['class' => 'btn btn-success'])?>
        <?php ActiveForm::end()?>
    <?php else: ?>
        <h3>Корзина пуста</h3>
    <?php endif;?>
</div>