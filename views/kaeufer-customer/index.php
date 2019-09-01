<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\KaeuferCustomerSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Kaeufer Customers';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kaeufer-customer-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Kaeufer Customer', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'kaeufersnummer_customer_id',
            'kaufersname_customer_name:ntext',
            'telefonnummer_phonenumber',
            'email:email',
            'anschrift_adress:ntext',
            //'unternehmersform_kind_of_customer',
            //'sonstiges_other:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
