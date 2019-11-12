<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\MitarbeiterEmployee */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="mitarbeiter-employee-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <?= $form->field($model, 'nr_inside_id')->textInput() ?>

    <?= $form->field($model, 'initialen_initials')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'vorname_firstname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nachname_surname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'geburtsdatum_birthdate')->textInput() ?>

    <?= $form->field($model, 'anstellungsdatum_employmentdate')->textInput() ?>

    <?= $form->field($model, 'kündigungsdatum_terminationdate')->textInput() ?>

    <?= $form->field($model, 'gehalt_salary')->textInput(['maxlength' => true]) ?>

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
