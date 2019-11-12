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
    <?= Html::a('x', null, ['class' => 'filterClose', 'onclick'=>'openFilter()']) ?>
    <?/*= Html::submitButton('x', ['class' => 'btn btn-success','onclick'=>'openFilterFzgBestand()']) */?>
   <div style="display: inline-flex">
       <?= $form->field($model, 'id')?>
       &nbsp;&nbsp;
       <?= $form->field($model, 'id_to') ?>
   </div>

    <div style="display: inline-flex">
        <?= $form->field($model, 'nr') ?>
        &nbsp;&nbsp;
        <?= $form->field($model, 'nr_to') ?>
    </div>
    <div style="display: inline-flex">
    <?= $form->field($model, 'ek_datum') ?>
        &nbsp;&nbsp;
    <?= $form->field($model, 'ek_datum_to') ?>
    </div>

    <?= $form->field($model, 'modell') ?>

    <?= $form->field($model, 'verkaeufer') ?>

    <?= $form->field($model, 'fin') ?>

    <div style="display: inline-flex">
        <?php  echo $form->field($model, 'ek_netto_preis') ?>
        &nbsp;&nbsp;
        <?php  echo $form->field($model, 'ek_netto_preis_to') ?>
    </div>

    <div style="display: inline-flex">
        <?php  echo $form->field($model, 'ek_mwst') ?>
        &nbsp;&nbsp;
        <?php  echo $form->field($model, 'ek_mwst_to') ?>

    </div>

    <div style="display: inline-flex">
        <?php  echo $form->field($model, 'ek_brutto_preis') ?>
        &nbsp;&nbsp;
        <?php  echo $form->field($model, 'ek_brutto_preis_to') ?>
    </div>
    <div style="display: inline-flex">
        <?php  echo $form->field($model, 'vk_datum') ?>
        &nbsp;
        <?php  echo $form->field($model, 'vk_datum_to') ?>
    </div>


    <?php  echo $form->field($model, 'kaeufer') ?>

    <div style="display: inline-flex">
    <?php  echo $form->field($model, 'vk_netto_preis') ?>
        &nbsp;
    <?php  echo $form->field($model, 'vk_netto_preis_to') ?>
    </div>
    <div style="display: inline-flex">
        <?php  echo $form->field($model, 'vk_mwst') ?>
        &nbsp;
        <?php  echo $form->field($model, 'vk_mwst_to') ?>
    </div>

    <div style="display: inline-flex">
        <?php  echo $form->field($model, 'vk_brutto_preis') ?>
        &nbsp;
        <?php  echo $form->field($model, 'vk_brutto_preis_to') ?>
    </div>

    <div style="display: inline-flex">
        <?php  echo $form->field($model, 'gewinn') ?>
        &nbsp;
        <?php  echo $form->field($model, 'gewinn_to') ?>
    </div>

    <?php  echo $form->field($model, 'gewinn_add') ?>

    <?php  echo $form->field($model, 'mitarbeiter_employee') ?>

    <?php  echo $form->field($model, 'vk_status') ?>

    <?php  echo $form->field($model, 'sonstiges') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary', 'onclick'=>'resetFilter()']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
<?php
$this->registerJsFile('../web/js/filter.js', ['depends' => [yii\web\JqueryAsset::className()]]);
?>