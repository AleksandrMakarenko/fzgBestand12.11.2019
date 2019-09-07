<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\VerkaeuferVendor */

$this->title = $model->verkaeufersnummer_vendor_id;
$this->params['breadcrumbs'][] = ['label' => 'Verkaeufer Vendors', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="verkaeufer-vendor-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->verkaeufersnummer_vendor_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->verkaeufersnummer_vendor_id], [
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
            'verkaeufersnummer_vendor_id',
            'verkaeufersname_vendor_name:ntext',
            'telefonnummer_phone_number',
            'email:email',
            'anschrift_adress:ntext',
            'unternehmersform_kind_of_customer',
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
                    echo '<li class="col-xs-6 col-sm-4 col-md-3" data-responsive="/web/images/verkaeuferVendor/'.$model->verkaeufersnummer_vendor_id."/".$files[$i].'"
                                                            data-src="/web/images/verkaeuferVendor/'.$model->verkaeufersnummer_vendor_id."/".$files[$i].'" data-sub-html="">
            <a href="">
                <img class="img-responsive" src="/web/images/verkaeuferVendor/'.$model->verkaeufersnummer_vendor_id."/".$files[$i].'">
            </a>
            <a href="/web/verkaeufer-vendor/delete-file?id='.$model->verkaeufersnummer_vendor_id."&name=".$files[$i].'" 
            title="Delete" aria-label="Delete" data-pjax="0" data-confirm="Are you sure you want to delete this image?" data-method="post">
            <span class="glyphicon glyphicon-trash"></span>
            </a>
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