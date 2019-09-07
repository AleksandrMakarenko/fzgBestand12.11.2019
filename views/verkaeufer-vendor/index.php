<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\VerkaeuferVendorSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Verkaeufer Vendors';
$this->params['breadcrumbs'][] = $this->title;
?>
<?php  echo $this->render('_search', ['model' => $searchModel]); ?>
<div class="verkaeufer-vendor-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Open Filter', null, ['class' => 'btn btn-success', 'onclick'=>'openFilterVerkaeuferVendor()']) ?>
        <?= Html::a('Create Verkaeufer Vendor', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'verkaeufersnummer_vendor_id',
            'verkaeufersname_vendor_name:ntext',
            'telefonnummer_phone_number',
            'email:email',
            'anschrift_adress:ntext',
            'unternehmersform_kind_of_customer',
            'sonstiges_other:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
