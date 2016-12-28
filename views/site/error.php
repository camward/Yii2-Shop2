<?php

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

use yii\helpers\Html;

$this->title = $name;
?>
<div class="block-4 col-3">
    <div class="h2">
        <h2 class="h2-line-2"><?= Html::encode($this->title) ?></h2>
    </div>
    <p class="center"><span class="clr-1 it-bold"><?= nl2br(Html::encode($message)) ?></p>
</div>