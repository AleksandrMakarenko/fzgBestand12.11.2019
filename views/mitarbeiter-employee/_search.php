<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\MitarbeiterEmployeeSearch */
/* @var $form yii\widgets\ActiveForm */
?>
<?php
$this->registerCssFile('../web/css/site.css', ['depends' => [yii\web\JqueryAsset::className()]]);
?>
<div class="mitarbeiter-employee-search hidden">
    <?= Html::a('x', null, ['class' => 'filterClose','onclick'=>'openFilter()']) ?>
    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'nr_inside_id') ?>

    <?= $form->field($model, 'initialen_initials') ?>

    <?= $form->field($model, 'vorname_firstname') ?>

    <?= $form->field($model, 'nachname_surname') ?>

    <?= $form->field($model, 'geburtsdatum_birthdate') ?>

    <?php  echo $form->field($model, 'anstellungsdatum_employmentdate') ?>

    <?php  echo $form->field($model, 'kündigungsdatum_terminationdate') ?>

    <?php  echo $form->field($model, 'gehalt_salary') ?>

    <?php  echo $form->field($model, 'sonstiges_other') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary', 'onclick'=>'resetFilter()']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
<?php
$this->registerJsFile('../web/js/filter.js', ['depends' => [yii\web\JqueryAsset::className()]]);
?>