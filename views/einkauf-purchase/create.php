<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\EinkaufPurchase */

$this->title = 'Create Einkauf Purchase';
$this->params['breadcrumbs'][] = ['label' => 'Einkauf Purchases', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="einkauf-purchase-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
