<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\VerkaufSale */

$this->title = 'Update Verkauf Sale: ' . $model->verkaufsnummer_sale_id;
$this->params['breadcrumbs'][] = ['label' => 'Verkauf Sales', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->verkaufsnummer_sale_id, 'url' => ['view', 'id' => $model->verkaufsnummer_sale_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="verkauf-sale-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
