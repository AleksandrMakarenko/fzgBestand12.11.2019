<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\KautionerSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="kaution-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'nr_inside_id') ?>

    <?= $form->field($model, 'fin_cars_number') ?>

    <?= $form->field($model, 'kaution_deposit') ?>

    <?= $form->field($model, 'bestaetigung_confirmation') ?>

    <?= $form->field($model, 'zahlungsdatum_payment_date') ?>

    <?php // echo $form->field($model, 'zahlungsform_form_of_payment') ?>

    <?php // echo $form->field($model, 'sonstiges_other') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
