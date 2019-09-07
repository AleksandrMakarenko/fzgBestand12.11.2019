<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ReparaturRepairSearch */
/* @var $form yii\widgets\ActiveForm */
?>
<?php
$this->registerCssFile('../web/css/site.css', ['depends' => [yii\web\JqueryAsset::className()]]);
?>
<div class="reparatur-repair-search hidden">
    <?= Html::a('x', null, ['class' => 'btn_1 btn-success_1','onclick'=>'openFilterReparaturRepair()']) ?>
    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'reparatursnummer_repairs_id') ?>

    <?= $form->field($model, 'fin_vehicle_id') ?>

    <?= $form->field($model, 'reparatursdatum_repairs_date') ?>

    <?= $form->field($model, 'reparaturskosten_repair_costs') ?>

    <?= $form->field($model, 'reparatursort_repair_place') ?>

    <?php  echo $form->field($model, 'reparatursinhalt_repair_content') ?>

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