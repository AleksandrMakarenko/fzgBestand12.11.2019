<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\EinkaufPurchaseSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Einkauf Purchases';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="einkauf-purchase-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Einkauf Purchase', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'nr_insite_id',
            'verkaeufersname_vendor_name:ntext',
            'einkaufsdatum_purchase_date',
            'fin_vehicle_id',
            'netto_preis_net_price',
            //'mws_value_added_tax',
            //'brutto_preis_gross_price',
            //'bezahlungsdatum_pay_date',
            //'zahlungsmethode_payment_method:ntext',
            //'sonstiges_other:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
