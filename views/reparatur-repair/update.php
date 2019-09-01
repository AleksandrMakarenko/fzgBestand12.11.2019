<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ReparaturRepair */

$this->title = 'Update Reparatur Repair: ' . $model->reparatursnummer_repairs_id;
$this->params['breadcrumbs'][] = ['label' => 'Reparatur Repairs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->reparatursnummer_repairs_id, 'url' => ['view', 'id' => $model->reparatursnummer_repairs_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="reparatur-repair-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
