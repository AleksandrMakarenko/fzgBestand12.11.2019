<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\MitarbeiterEmployee */

$this->title = 'Update Mitarbeiter Employee: ' . $model->initialen_initials;
$this->params['breadcrumbs'][] = ['label' => 'Mitarbeiter Employees', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->initialen_initials, 'url' => ['view', 'id' => $model->initialen_initials]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="mitarbeiter-employee-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
