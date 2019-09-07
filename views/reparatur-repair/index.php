<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ReparaturRepairSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Reparatur Repairs';
$this->params['breadcrumbs'][] = $this->title;
?>
<?php echo $this->render('_search', ['model' => $searchModel]); ?>
<div class="reparatur-repair-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Open Filter', null, ['class' => 'btn btn-success','onclick'=>'openFilterReparaturRepair()']) ?>
        <?= Html::a('Create Reparatur Repair', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'reparatursnummer_repairs_id',
            'fin_vehicle_id',
            'reparatursdatum_repairs_date',
            'reparaturskosten_repair_costs',
            'reparatursort_repair_place:ntext',
            'reparatursinhalt_repair_content:ntext',
            'sonstiges_other:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
