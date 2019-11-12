<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\MitarbeiterEmployee */

$this->title = $model->initialen_initials;
$this->params['breadcrumbs'][] = ['label' => 'Mitarbeiter Employees', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="mitarbeiter-employee-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->initialen_initials], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->initialen_initials], [
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
            'initialen_initials',
            'vorname_firstname',
            'nachname_surname',
            'geburtsdatum_birthdate',
            'anstellungsdatum_employmentdate',
            'kündigungsdatum_terminationdate',
            'gehalt_salary',
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
                    echo '<li class="col-xs-6 col-sm-4 col-md-3" data-responsive="/web/images/mitarbeiterEmployee/'.$model->initialen_initials."/".$files[$i].'"
                                                            data-src="/web/images/mitarbeiterEmployee/'.$model->initialen_initials."/".$files[$i].'" data-sub-html="">
            <a href="">
                <img class="img-responsive" src="/web/images/mitarbeiterEmployee/'.$model->initialen_initials."/".$files[$i].'">
            </a>
            <a href="/web/mitarbeiter-employee/delete-file?id='.$model->initialen_initials."&name=".$files[$i].'" title="Delete" aria-label="Delete" data-pjax="0"
             data-confirm="Are you sure you want to delete this image?" data-method="post">
             <span class="glyphicon glyphicon-trash"></span></a>
        </li>';
                    //  echo "<img width=300 src='/web/images/mitarbeiterEmployee/".$model->id."/".$files[$i]."'>";
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