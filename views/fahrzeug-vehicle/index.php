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

<div class="fahrzeug-vehicle-index" >

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Open Filter', null, ['class' => 'btn btn-success','onclick'=>'openFilterFahrzeugVehicle()']) ?>
        <?= Html::a('Create Fahrzeug Vehicle', ['create'], ['class' => 'btn btn-success']) ?>

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


</div>
