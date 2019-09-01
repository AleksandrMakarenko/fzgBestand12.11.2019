<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\FzgBestand */

$this->title = 'Update Fzg Bestand: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Fzg Bestands', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="fzg-bestand-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
