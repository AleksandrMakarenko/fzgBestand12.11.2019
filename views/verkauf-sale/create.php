<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\VerkaufSale */

$this->title = 'Create Verkauf Sale';
$this->params['breadcrumbs'][] = ['label' => 'Verkauf Sales', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="verkauf-sale-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
