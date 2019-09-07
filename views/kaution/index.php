<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\KautionerSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Kautions';
$this->params['breadcrumbs'][] = $this->title;
?>
<?php  echo $this->render('_search', ['model' => $searchModel]); ?>
<div class="kaution-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Open Filter', null, ['class' => 'btn btn-success','onclick'=>'openFilterKaution()']) ?>
        <?= Html::a('Create Kaution', ['create'], ['class' => 'btn btn-success']) ?>
    </p>



    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'nr_inside_id',
            'fin_cars_number',
            'kaution_deposit',
            'bestaetigung_confirmation',
            'zahlungsdatum_payment_date',
            'zahlungsform_form_of_payment',
            'sonstiges_other:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
