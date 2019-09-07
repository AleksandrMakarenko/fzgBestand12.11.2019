<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\VerkaufSaleSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Verkauf Sales';
$this->params['breadcrumbs'][] = $this->title;
?>
<?php  echo $this->render('_search', ['model' => $searchModel]); ?>
<div class="verkauf-sale-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Open Filter', null, ['class' => 'btn btn-success','onclick'=>'openFilterVerkaufSale()']) ?>
        <?= Html::a('Create Verkauf Sale', ['create'], ['class' => 'btn btn-success']) ?>
    </p>



    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'verkaufsnummer_sale_id',
            'fin_vehicle_id',
            'verkaufsdatum_sale_date',
            'kaeufersname_customersname:ntext',
            'nettopreis_net_price',
            'mws_value_added_tax',
            'bruttopreis_gross_price',
            'gewinn_profit',
            'zahlungsmethode_payment_method:ntext',
            'zahlungsdatum_payment_date',
            'sonstiges_other:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
