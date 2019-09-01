<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Kaution */

$this->title = 'Update Kaution: ' . $model->nr_inside_id;
$this->params['breadcrumbs'][] = ['label' => 'Kautions', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->nr_inside_id, 'url' => ['view', 'id' => $model->nr_inside_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="kaution-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
