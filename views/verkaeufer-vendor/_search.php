<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\VerkaeuferVendorSearch */
/* @var $form yii\widgets\ActiveForm */
?>
<?php
$this->registerCssFile('../web/css/site.css', ['depends' => [yii\web\JqueryAsset::className()]]);
?>
<div class="verkaeufer-vendor-search hidden">
    <?= Html::a('x', null, ['class' => 'filterClose', 'onclick'=>'openFilter()']) ?>
    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'verkaeufersnummer_vendor_id') ?>

    <?= $form->field($model, 'verkaeufersname_vendor_name') ?>

    <?= $form->field($model, 'telefonnummer_phone_number') ?>

    <?= $form->field($model, 'email') ?>

    <?= $form->field($model, 'anschrift_adress') ?>

    <?php echo $form->field($model, 'unternehmersform_kind_of_customer') ?>

    <?php echo $form->field($model, 'sonstiges_other') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary', 'onclick'=>'resetFilter()']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
<?php
$this->registerJsFile('../web/js/filter.js', ['depends' => [yii\web\JqueryAsset::className()]]);
?>