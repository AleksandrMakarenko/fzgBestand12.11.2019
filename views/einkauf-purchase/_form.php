<?php

use app\models\VerkaeuferVendor;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\EinkaufPurchase */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="einkauf-purchase-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <?= $form->field($model, 'nr_insite_id')->textInput() ?>

   
    <div class="form-group field-select required">
        <label class="control-label" for="select">Verkaeufersname (Vendor Name)</label>
        <select id="select" class="form-control" name="EinkaufPurchase[verkaeufersname_vendor_name]" aria-required="true" onchange="updateVendorId()" >
<?php
$vendors=VerkaeuferVendor::find()->all();
foreach ($vendors as $vendor)
{
   echo '<option data-id="'.$vendor->verkaeufersnummer_vendor_id.'" value="'.$vendor->verkaeufersname_vendor_name.'" >'.$vendor->verkaeufersname_vendor_name.' </option>';
}

?>
    </select>
        </div>
    <?= $form->field($model, 'verkaeufersnr_vendor_id')->textInput() ?>

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
<?php
$this->registerCssFile('https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.10/css/select2.min.css');
$this->registerJsFile('https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.10/js/select2.min.js',
    ['depends' => [yii\web\JqueryAsset::className()]]);
$this->registerJsFile('../web/js/select2.js',
    ['depends' => [yii\web\JqueryAsset::className()]]);
?>
