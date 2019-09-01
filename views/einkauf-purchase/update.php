<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\EinkaufPurchase */

$this->title = 'Update Einkauf Purchase: ' . $model->nr_insite_id;
$this->params['breadcrumbs'][] = ['label' => 'Einkauf Purchases', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->nr_insite_id, 'url' => ['view', 'id' => $model->nr_insite_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="einkauf-purchase-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
