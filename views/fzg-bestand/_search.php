<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\FzgBestandSearch */
/* @var $form yii\widgets\ActiveForm */
?>
<?php
$this->registerCssFile('../web/css/site.css', ['depends' => [yii\web\JqueryAsset::className()]]);
?>
<div class="fzg-bestand-search hidden" >

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>
    <?= Html::a('x', null, ['class' => 'btn_1 btn-success_1', 'onclick'=>'openFilterFzgBestand()']) ?>
    <?/*= Html::submitButton('x', ['class' => 'btn btn-success','onclick'=>'openFilterFzgBestand()']) */?>
    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'nr') ?>

    <?= $form->field($model, 'ek_datum') ?>

    <?= $form->field($model, 'modell') ?>

    <?= $form->field($model, 'verkaeufer') ?>

    <?php  echo $form->field($model, 'fin') ?>

    <?php  echo $form->field($model, 'ek_netto_preis') ?>

    <?php  echo $form->field($model, 'ek_mwst') ?>

    <?php  echo $form->field($model, 'ek_brutto_preis') ?>

    <?php  echo $form->field($model, 'vk_datum') ?>

    <?php  echo $form->field($model, 'kaeufer') ?>

    <?php  echo $form->field($model, 'vk_netto_preis') ?>

    <?php  echo $form->field($model, 'vk_mwst') ?>

    <?php  echo $form->field($model, 'vk_brutto_preis') ?>

    <?php  echo $form->field($model, 'gewinn') ?>

    <?php  echo $form->field($model, 'sonstiges') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
<?php
$this->registerJsFile('../web/js/filter.js', ['depends' => [yii\web\JqueryAsset::className()]]);
?>