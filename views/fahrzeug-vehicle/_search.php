<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\FahrzeugVehicleSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="fahrzeug-vehicle-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'nr_inside_id') ?>

    <?= $form->field($model, 'fin_vehicle_number') ?>

    <?= $form->field($model, 'alte_nr_old_insite_number') ?>

    <?= $form->field($model, 'modell_car_model') ?>

    <?= $form->field($model, 'herstellungsjahr_manufacturing_jear') ?>

    <?php // echo $form->field($model, 'verkaufsstatus_sale_state') ?>

    <?php // echo $form->field($model, 'bilder_images') ?>

    <?php // echo $form->field($model, 'sonstiges_other') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
