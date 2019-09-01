<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\FzgBestandSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Fzg Bestands';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="fzg-bestand-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Fzg Bestand', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'nr',
            'ek_datum',
            'modell:ntext',
            'verkaeufer:ntext',
            'fin',
            'ek_netto_preis',
            'ek_mwst',
            'ek_brutto_preis',
            'vk_datum',
            'kaeufer:ntext',
            'vk_netto_preis',
            'vk_mwst',
            'vk_brutto_preis',
            'gewinn',
            'sonstiges:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
