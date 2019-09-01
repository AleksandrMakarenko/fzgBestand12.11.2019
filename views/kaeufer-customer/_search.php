<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\KaeuferCustomerSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="kaeufer-customer-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'kaeufersnummer_customer_id') ?>

    <?= $form->field($model, 'kaufersname_customer_name') ?>

    <?= $form->field($model, 'telefonnummer_phonenumber') ?>

    <?= $form->field($model, 'email') ?>

    <?= $form->field($model, 'anschrift_adress') ?>

    <?php // echo $form->field($model, 'unternehmersform_kind_of_customer') ?>

    <?php // echo $form->field($model, 'sonstiges_other') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
