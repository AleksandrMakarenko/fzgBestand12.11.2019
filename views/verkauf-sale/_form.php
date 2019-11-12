<?php

use app\models\KaeuferCustomer;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\VerkaufSale */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="verkauf-sale-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <?= $form->field($model, 'verkaufsnummer_sale_id')->textInput() ?>

    <?= $form->field($model, 'fin_vehicle_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'verkaufsdatum_sale_date')->textInput() ?>


<!--    --><?//= $form->field($model, 'kaeufersname_customersname')->textInput() ?>
    <div class="form-group field-select required">
        <label class="control-label" for="select">Verkaeufersname (Vendor Name)</label>
        <select id="select" class="form-control" name="VerkaufSale[kaeufersname_customer_name]" aria-required="true" onchange="updateCustomerId()" >
            <?php
            $customers=KaeuferCustomer::find()->all();
            foreach ($customers as $customer)
            {
                echo '<option data-id="'.$customer->kaeufersnummer_customer_id.'" value="'.$customer->kaufersname_customer_name.'" >'
                    .$customer->kaufersname_customer_name.' </option>';
            }
            ?>
        </select>
    </div>

    <?= $form->field($model, 'kaeufersnummer_customer_id')->textInput() ?>



    <?= $form->field($model, 'nettopreis_net_price')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'mws_value_added_tax')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'bruttopreis_gross_price')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'gewinn_profit')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'zahlungsmethode_payment_method')->textInput() ?>

    <?= $form->field($model, 'zahlungsdatum_payment_date')->textInput() ?>

    <?= $form->field($model, 'mitarbeiter_employee')->textInput() ?>

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