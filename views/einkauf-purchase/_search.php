<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\EinkaufPurchaseSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="einkauf-purchase-search">
    <?= Html::a('x', null, ['class' => 'btn_1 btn-success_1','onclick'=>'openFilterEinkaufPurchase()']) ?>
    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'nr_insite_id') ?>

    <?= $form->field($model, 'verkaeufersname_vendor_name') ?>

    <?= $form->field($model, 'einkaufsdatum_purchase_date') ?>

    <?= $form->field($model, 'fin_vehicle_id') ?>

    <?= $form->field($model, 'netto_preis_net_price') ?>

    <?php  echo $form->field($model, 'mws_value_added_tax') ?>

    <?php  echo $form->field($model, 'brutto_preis_gross_price') ?>

    <?php  echo $form->field($model, 'bezahlungsdatum_pay_date') ?>

    <?php  echo $form->field($model, 'zahlungsmethode_payment_method') ?>

    <?php  echo $form->field($model, 'sonstiges_other') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
