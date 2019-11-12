<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\FzgBestand */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="fzg-bestand-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <?= $form->field($model, 'id')->textInput() ?>

    <?= $form->field($model, 'nr')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ek_datum')->textInput() ?>

    <?= $form->field($model, 'modell')->textarea(['rows' => 2]) ?>

    <?= $form->field($model, 'verkaeufer')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'fin')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ek_netto_preis')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ek_mwst')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ek_brutto_preis')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'vk_status')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'vk_datum')->textInput() ?>

    <?= $form->field($model, 'kaeufer')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'vk_netto_preis')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'vk_mwst')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'vk_brutto_preis')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'gewinn')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'mitarbeiter_employee')->textarea(['rows' => 2]) ?>

    <?= $form->field($model, 'sonstiges')->textarea(['rows' => 6]) ?>
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
