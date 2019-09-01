<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\FzgBestand */

$this->title = 'Create Fzg Bestand';
$this->params['breadcrumbs'][] = ['label' => 'Fzg Bestands', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="fzg-bestand-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
