<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\VerkaufSaleSearch */
/* @var $form yii\widgets\ActiveForm */
?>
<?php
$this->registerCssFile('../web/css/site.css', ['depends' => [yii\web\JqueryAsset::className()]]);
?>
<div class="verkauf-sale-search hidden">
    <?= Html::a('x', null, ['class' => 'btn_1 btn-success_1','onclick'=>'openFilterVerkaufSale()']) ?>
    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'verkaufsnummer_sale_id') ?>

    <?= $form->field($model, 'fin_vehicle_id') ?>

    <?= $form->field($model, 'verkaufsdatum_sale_date') ?>

    <?= $form->field($model, 'kaeufersname_customersname') ?>

    <?= $form->field($model, 'nettopreis_net_price') ?>

    <?php echo $form->field($model, 'mws_value_added_tax') ?>

    <?php echo $form->field($model, 'bruttopreis_gross_price') ?>

    <?php echo $form->field($model, 'gewinn_profit') ?>

    <?php echo $form->field($model, 'zahlungsmethode_payment_method') ?>

    <?php echo $form->field($model, 'zahlungsdatum_payment_date') ?>

    <?php echo $form->field($model, 'sonstiges_other') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
<?php
$this->registerJsFile('../web/js/filter.js', ['depends' => [yii\web\JqueryAsset::className()]]);
?>