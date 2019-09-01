<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\KaeuferCustomer */

$this->title = 'Create Kaeufer Customer';
$this->params['breadcrumbs'][] = ['label' => 'Kaeufer Customers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kaeufer-customer-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
