<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\FahrzeugVehicle */

$this->title = 'Update Fahrzeug Vehicle: ' . $model->fin_vehicle_number;
$this->params['breadcrumbs'][] = ['label' => 'Fahrzeug Vehicles', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->fin_vehicle_number, 'url' => ['view', 'id' => $model->fin_vehicle_number]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="fahrzeug-vehicle-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
