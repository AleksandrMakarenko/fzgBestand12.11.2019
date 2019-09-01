<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\FahrzeugVehicle */

$this->title = 'Create Fahrzeug Vehicle';
$this->params['breadcrumbs'][] = ['label' => 'Fahrzeug Vehicles', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="fahrzeug-vehicle-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
