<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\VerkaeuferVendor */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="verkaeufer-vendor-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <?= $form->field($model, 'verkaeufersnummer_vendor_id')->textInput() ?>

    <?= $form->field($model, 'verkaeufersname_vendor_name')->textInput() ?>

    <?= $form->field($model, 'telefonnummer_phone_number')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'anschrift_adress')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'unternehmersform_kind_of_customer')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sonstiges_other')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <input type="file" id="files" name="pictures[]" multiple />
        <output id="list"></output>

        <script>
            function handleFileSelect(evt) {
                var files = evt.target.files; // FileList object

                // files is a FileList of File objects. List some properties.
                var output = [];
                for (var i = 0, f; f = files[i]; i++) {
                    output.push('<li><strong>', escape(f.name), '</strong> (', f.type || 'n/a', ') - ',
                        f.size, ' bytes, last modified: ',
                        f.lastModifiedDate ? f.lastModifiedDate.toLocaleDateString() : 'n/a',
                        '</li>');
                }
                document.getElementById('list').innerHTML = '<ul>' + output.join('') + '</ul>';
            }

            document.getElementById('files').addEventListener('change', handleFileSelect, false);
        </script>

        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
