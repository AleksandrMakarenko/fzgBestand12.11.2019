<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\VerkaeuferVendor */

$this->title = 'Update Verkaeufer Vendor: ' . $model->verkaeufersnummer_vendor_id;
$this->params['breadcrumbs'][] = ['label' => 'Verkaeufer Vendors', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->verkaeufersnummer_vendor_id, 'url' => ['view', 'id' => $model->verkaeufersnummer_vendor_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="verkaeufer-vendor-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
