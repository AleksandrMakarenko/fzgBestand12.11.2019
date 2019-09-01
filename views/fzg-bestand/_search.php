<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\FzgBestandSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="fzg-bestand-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'nr') ?>

    <?= $form->field($model, 'ek_datum') ?>

    <?= $form->field($model, 'modell') ?>

    <?= $form->field($model, 'verkaeufer') ?>

    <?php // echo $form->field($model, 'fin') ?>

    <?php // echo $form->field($model, 'ek_netto_preis') ?>

    <?php // echo $form->field($model, 'ek_mwst') ?>

    <?php // echo $form->field($model, 'ek_brutto_preis') ?>

    <?php // echo $form->field($model, 'vk_datum') ?>

    <?php // echo $form->field($model, 'kaeufer') ?>

    <?php // echo $form->field($model, 'vk_netto_preis') ?>

    <?php // echo $form->field($model, 'vk_mwst') ?>

    <?php // echo $form->field($model, 'vk_brutto_preis') ?>

    <?php // echo $form->field($model, 'gewinn') ?>

    <?php // echo $form->field($model, 'sonstiges') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
