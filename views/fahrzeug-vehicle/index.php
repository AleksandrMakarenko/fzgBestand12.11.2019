<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\FahrzeugVehicleSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Fahrzeug Vehicles';
$this->params['breadcrumbs'][] = $this->title;
?>
<?php  echo $this->render('_search', ['model' => $searchModel]); ?>
<div class="openLinks hidden">
    <?= Html::a('Go to Fahrzeug(Vechicle)', 'http://yii2/web/fahrzeug-vehicle/index', ['class' => 'linkToAnotherTable']) ?>
    <?= Html::a('Go to Einkauf(Purchase)', 'http://yii2/web/einkauf-purchase', ['class' => 'linkToAnotherTable']) ?>
    <?= Html::a('Go to FzgBestand', 'http://yii2/web/fzg-bestand/', ['class' => 'linkToAnotherTable']) ?>
    <?= Html::a('Go to Kaeufer(Customer)', 'http://yii2/web/kaeufer-customer/', ['class' => 'linkToAnotherTable']) ?>
    <?= Html::a('Go to Kaution', 'http://yii2/web/kaution', ['class' => 'linkToAnotherTable']) ?>
    <?= Html::a('Go to Mitarbeiter(Employee)', 'http://yii2/web/mitarbeiter-employee', ['class' => 'linkToAnotherTable']) ?>
    <?= Html::a('Go to Reparatur(Repair)', 'http://yii2/web/reparatur-repair', ['class' => 'linkToAnotherTable']) ?>
    <?= Html::a('Go to Verkaeufer(Vendor)', 'http://yii2/web/verkaeufer-vendor', ['class' => 'linkToAnotherTable']) ?>
    <?= Html::a('Go to Verkauf(Sale)', 'http://yii2/web/verkauf-sale', ['class' => 'linkToAnotherTable']) ?>

</div>
<div class="fahrzeug-vehicle-index" >

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Open Filter', null, ['class' => 'btn btn-success','onclick'=>'openFilter()']) ?>
        <?= Html::a('Create Fahrzeug Vehicle', ['create'], ['class' => 'btn btn-success']) ?>
        <?= Html::a('Open Go to ', null, ['class' => 'btn btn-success', 'onclick'=>'openLinks()']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'nr_inside_id',
            'fin_vehicle_number',
            'alte_nr_old_insite_number',
            'modell_car_model:ntext',
            'herstellungsjahr_manufacturing_jear',
            'verkaufsstatus_sale_state:ntext',
            'bilder_images:ntext',
            'sonstiges_other:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <style>
        .grid-view th {
            white-space: pre-wrap;
        }
    </style>

</div>
