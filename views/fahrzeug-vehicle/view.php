<?php

use yii\helpers\Html;
use yii\widgets\DetailView;


/* @var $this yii\web\View */
/* @var $model app\models\FahrzeugVehicle */

$this->title = $model->fin_vehicle_number;
$this->params['breadcrumbs'][] = ['label' => 'Fahrzeug Vehicles', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="fahrzeug-vehicle-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->nr_inside_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->nr_inside_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'nr_inside_id',
            'fin_vehicle_number',
            'alte_nr_old_insite_number',
            'modell_car_model:ntext',
            'herstellungsjahr_manufacturing_jear',
            'verkaufsstatus_sale_state:ntext',
            'bilder_images:ntext',
            'sonstiges_other:ntext',
        ],
    ]) ?>

</div>

<head>
    <title>jQuery lightGallery demo</title>
    <?php
    $this->registerCssFile('../web/public/dist/css/lightgallery.css', ['depends' => [yii\web\JqueryAsset::className()]]);
    $this->registerCssFile('../web/css/light-gallery.css', ['depends' => [yii\web\JqueryAsset::className()]]);
    ?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
</head>
<div class="demo-gallery">
    <ul id="lightgallery" class="list-unstyled row">
        <?php
        if(!empty($files))
        {
            for($i=2;$i<count($files);$i++)
            {
                echo '<li class="col-xs-6 col-sm-4 col-md-3" data-responsive="/web/images/fahrzeugVehicle/'.$model->nr_inside_id."/".$files[$i].'"
                                                             data-src="/web/images/fahrzeugVehicle/'.$model->nr_inside_id."/".$files[$i].'" data-sub-html="">
            <a href="">
                <img class="img-responsive" src="/web/images/fahrzeugVehicle/'.$model->nr_inside_id."/".$files[$i].'">
            </a>
            <a href="/web/fahrzeug-vehicle/delete-file?id='.$model->nr_inside_id."&name=".$files[$i].'" title="Delete" aria-label="Delete" data-pjax="0" 
            data-confirm="Are you sure you want to delete this image?" data-method="post">
            <span class="glyphicon glyphicon-trash"></span></a>
        </li>';
            }
        }
        ?>
   </ul>
</div>
<script type="text/javascript">
    $(document).ready(function(){
        $('#lightgallery').lightGallery();
    });
</script>
<?php
$this->registerJsFile('https://cdn.jsdelivr.net/picturefill/2.3.1/picturefill.min.js', ['depends' => [yii\web\JqueryAsset::className()]]);
$this->registerJsFile('../web/public/dist/js/lightgallery-all.min.js', ['depends' => [yii\web\JqueryAsset::className()]]);
$this->registerJsFile('../web/public/lib/jquery.mousewheel.min.js', ['depends' => [yii\web\JqueryAsset::className()]]);
$this->registerJsFile('../web/js/light-gallery.js', ['depends' => [yii\web\JqueryAsset::className()]]);
?>



