<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ReparaturRepair */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="reparatur-repair-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <?= $form->field($model, 'reparatursnummer_repairs_id')->textInput() ?>

    <?= $form->field($model, 'fin_vehicle_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'reparatursdatum_repairs_date')->textInput() ?>

    <?= $form->field($model, 'reparaturskosten_repair_costs')->textInput() ?>

    <?= $form->field($model, 'reparatursort_repair_place')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'reparatursinhalt_repair_content')->textarea(['rows' => 6]) ?>

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
