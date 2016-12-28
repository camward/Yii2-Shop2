<?
use yii\widgets\ActiveForm;
use yii\helpers\Html;
?>

<div class="col-5">
    <h3 class="h3-line">Contact info</h3>
    <div class="map img-border">
        <iframe src="http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Brooklyn,+New+York,+NY,+United+States&amp;aq=0&amp;sll=37.0625,-95.677068&amp;sspn=61.282355,146.513672&amp;ie=UTF8&amp;hq=&amp;hnear=Brooklyn,+Kings,+New+York&amp;ll=40.649974,-73.950005&amp;spn=0.01628,0.025663&amp;z=14&amp;iwloc=A&amp;output=embed"></iframe>
    </div>
    <div class="wrap">
        <dl class="adr">
            <dt class="clr-3 it-bold">Valencia</dt>
            <dd>8901 Marmora Road, <br>Glasgow, D04 89GR</dd>
            <dd><span>Telephone:</span><strong class="clr-2">+1 959 603 6035</strong></dd>
            <dd><span>Fax:</span><strong class="clr-2">+1 504 889 9898</strong></dd>
            <dd><span>Email:</span><a href="#" class="link">mail@valencia.com</a></dd>
        </dl>
        <dl class="adr last">
            <dt class="clr-3 it-bold">Valencia</dt>
            <dd>9863 Mill Road, <br>Cambridge, MG09 99HT</dd>
            <dd><span>Telephone:</span><strong class="clr-2">+1 959 603 6035</strong></dd>
            <dd><span>Fax:</span><strong class="clr-2">+1 504 889 9898</strong></dd>
            <dd><span>Email:</span><a href="#" class="link">mail@valencia.com</a></dd>
        </dl>
    </div>
</div>
<div class="col-4 left-2">
    <h3 class="h3-line">Contact form:</h3>

    <?if(Yii::$app->session->hasFlash('success')):?>
        <div class="alert alert-success alert-dismissable">
            <?=Yii::$app->session->getFlash('success')?>
        </div>
    <?endif;?>
    <?if(Yii::$app->session->hasFlash('error')):?>
        <div class="alert alert-danger alert-dismissable">
            <?=Yii::$app->session->getFlash('error')?>
        </div>
    <?endif;?>

    <?$form = ActiveForm::begin(['id' => 'form']);?>
    <fieldset>
        <?=$form->field($model, 'name')?>
        <?=$form->field($model, 'email')?>
        <?=$form->field($model, 'text')->textarea(['rows' => 10])?>
    </fieldset>
    <div class="btns">
        <?=Html::resetButton('Очистить', ['class' => 'btn btn-sm btn-warning'])?>
        <?=Html::submitButton('Отправить', ['class' => 'btn btn-sm btn-success'])?>
    </div>
    <div class="clear"></div>
    <?ActiveForm::end();?>
    <br />
</div>