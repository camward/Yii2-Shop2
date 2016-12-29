<?php if(!empty($session['cart'])): ?>
    <div class="table-responsive">
        <table class="table table-hover table-striped">
            <thead>
                <tr>
                    <th>Фото</th>
                    <th>Наименование</th>
                    <th>Кол-во</th>
                    <th>Цена</th>
                    <th><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($_SESSION['cart'] as $id => $item):?>
                    <tr>
                        <td>
                            <a href="<?= \yii\helpers\Url::to(['shop/products-view', 'id' => $id]) ?>">
                                <?= \yii\helpers\Html::img("@web/images/{$item['images']}", ['alt' => $item['name'], 'height' => 50]) ?>
                            </a>
                        </td>
                        <td><?= $item['name']?></td>
                        <td><?= $item['qty']?></td>
                        <td><?= $item['price']?> rub.</td>
                        <td><span data-id="<?= $id?>" class="glyphicon glyphicon-remove text-danger del-item" aria-hidden="true"></span></td>
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
<?php else: ?>
    <h3>Корзина пуста</h3>
<?php endif;?>