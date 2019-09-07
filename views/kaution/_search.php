<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\KautionerSearch */
/* @var $form yii\widgets\ActiveForm */
?>
<?php
$this->registerCssFile('../web/css/site.css', ['depends' => [yii\web\JqueryAsset::className()]]);
?>
<div class="kaution-search hidden">
    <?= Html::a('x', null, ['class' => 'btn_1 btn-success_1','onclick'=>'openFilterKaution()']) ?>
    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'nr_inside_id') ?>

    <?= $form->field($model, 'fin_cars_number') ?>

    <?= $form->field($model, 'kaution_deposit') ?>

    <?= $form->field($model, 'bestaetigung_confirmation') ?>

    <?= $form->field($model, 'zahlungsdatum_payment_date') ?>

    <?php  echo $form->field($model, 'zahlungsform_form_of_payment') ?>

    <?php  echo $form->field($model, 'sonstiges_other') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
<?php
$this->registerJsFile('../web/js/filter.js', ['depends' => [yii\web\JqueryAsset::className()]]);
?>