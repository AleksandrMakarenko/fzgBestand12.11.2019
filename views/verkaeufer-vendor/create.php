<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\VerkaeuferVendor */

$this->title = 'Create Verkaeufer Vendor';
$this->params['breadcrumbs'][] = ['label' => 'Verkaeufer Vendors', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="verkaeufer-vendor-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
