<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ReparaturRepair */

$this->title = 'Create Reparatur Repair';
$this->params['breadcrumbs'][] = ['label' => 'Reparatur Repairs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="reparatur-repair-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
