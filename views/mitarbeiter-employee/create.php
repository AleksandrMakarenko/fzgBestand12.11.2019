<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\MitarbeiterEmployee */

$this->title = 'Create Mitarbeiter Employee';
$this->params['breadcrumbs'][] = ['label' => 'Mitarbeiter Employees', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mitarbeiter-employee-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
