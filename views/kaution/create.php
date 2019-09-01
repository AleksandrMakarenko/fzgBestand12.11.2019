<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Kaution */

$this->title = 'Create Kaution';
$this->params['breadcrumbs'][] = ['label' => 'Kautions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kaution-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
