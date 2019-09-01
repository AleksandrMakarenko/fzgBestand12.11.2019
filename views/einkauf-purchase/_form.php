<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\EinkaufPurchase */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="einkauf-purchase-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <?= $form->field($model, 'nr_insite_id')->textInput() ?>

    <?= $form->field($model, 'verkaeufersname_vendor_name')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'einkaufsdatum_purchase_date')->textInput() ?>

    <?= $form->field($model, 'fin_vehicle_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'netto_preis_net_price')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'mws_value_added_tax')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'brutto_preis_gross_price')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'bezahlungsdatum_pay_date')->textInput() ?>

    <?= $form->field($model, 'zahlungsmethode_payment_method')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'sonstiges_other')->textarea(['rows' => 6]) ?>

    <input type="file" id="files" name="pictures[]" multiple />
    <output id="list"></output>
    <script>
        function handleFileSelect(evt) {
            var files = evt.target.files; // FileList object

            // files is a FileList of File objects. List some properties.
            var output = [];
            for (var i = 0, f; f = files[i]; i++) {
                output.push('<li><strong>', escape(f.name), '</strong> (', f.type || 'n/a', ') - ',
                    f.size/1024, ' Kb, last modified: ',
                    f.lastModifiedDate ? f.lastModifiedDate.toLocaleDateString() : 'n/a',
                    '</li>');
            }
            document.getElementById('list').innerHTML = '<ul>' + output.join('') + '</ul>';
        }
        document.getElementById('files').addEventListener('change', handleFileSelect, false);
    </script>
    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>
</div>

