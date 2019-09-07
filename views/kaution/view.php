<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Kaution */

$this->title = $model->nr_inside_id;
$this->params['breadcrumbs'][] = ['label' => 'Kautions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="kaution-view">

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
            'fin_cars_number',
            'kaution_deposit',
            'bestaetigung_confirmation',
            'zahlungsdatum_payment_date',
            'zahlungsform_form_of_payment',
            'sonstiges_other:ntext',
        ],
    ]) ?>


</div>

<head>
    <?php
    $this->registerCssFile('../web/public/dist/css/lightgallery.css', ['depends' => [yii\web\JqueryAsset::className()]]);
    $this->registerCssFile('../web/css/light-gallery.css', ['depends' => [yii\web\JqueryAsset::className()]]);
    ?>

</head>


<div class="demo-gallery">
    <ul id="lightgallery" class="list-unstyled row">
        <?php
        if(!empty($files)){
            for($i=2;$i<count($files);$i++)
            {
                echo '<li class="col-xs-6 col-sm-4 col-md-3" data-responsive="/web/images/kaution/'.$model->nr_inside_id."/".$files[$i].'"
                                                            data-src="/web/images/kaution/'.$model->nr_inside_id."/".$files[$i].'" data-sub-html="">
            <a href="">
                <img class="img-responsive" src="/web/images/kaution/'.$model->nr_inside_id."/".$files[$i].'">
            </a>
            <a href="/web/kaution/delete-file?id='.$model->nr_inside_id."&name=".$files[$i].'" title="Delete" aria-label="Delete" data-pjax="0" 
            data-confirm="Are you sure you want to delete this image?" data-method="post">
             <span class="glyphicon glyphicon-trash"></span></a>
        </li>';
                //  echo "<img width=300 src='/web/images/fzgBestand/".$model->id."/".$files[$i]."'>";
            }
        }
        ?>


    </ul>
</div>

<?php
$this->registerJsFile('https://cdn.jsdelivr.net/picturefill/2.3.1/picturefill.min.js', ['depends' => [yii\web\JqueryAsset::className()]]);
$this->registerJsFile('../web/public/dist/js/lightgallery-all.min.js', ['depends' => [yii\web\JqueryAsset::className()]]);
$this->registerJsFile('../web/public/lib/jquery.mousewheel.min.js', ['depends' => [yii\web\JqueryAsset::className()]]);
$this->registerJsFile('../web/js/light-gallery.js', ['depends' => [yii\web\JqueryAsset::className()]]);
?>
