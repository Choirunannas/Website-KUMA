<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\AtasanSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Atasan';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="atasan-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Atasan', ['create'], ['class' => 'btn btn-success']) ?>
        <?= Html::a('Export Excell', ['excell'], ['class' => 'btn btn-danger']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'Id_atasan',
            'Nama',
            'NIP',
            'Pangkat',
            'Jabatan',
            'Unit_Kerja',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    
   <!-- ======= Featured Section ======= -->
   <section id="featured" class="featured">
            <div class="container">

                <div class="row">
                    <div class="col-lg-4">
                        <div class="icon-box">
                            <i class="icofont-database"></i>
                            <h3>Kum A</h3>
                        <p><a class="btn btn-lg btn-success" href="http://localhost/kuma/backend/web/site/login">Input data</a></p>
                        </div>
                    </div>
                    <div class="col-lg-4 mt-4 mt-lg-0">
                        <div class="icon-box">
                            <i class="icofont-globe"></i>
                            <h3>Website PENS</h3>
                            <p><a class="btn btn-lg btn-success" href="https://www.pens.ac.id/">Kunjungi</a></p>
                        </div>
                    </div>
                    <div class="col-lg-4 mt-4 mt-lg-0">
                        <div class="icon-box">
                            <i class="icofont-globe"></i>
                            <h3>Info Pengumuman</h3>
                            <p><a class="btn btn-lg btn-success" href="https://online.mis.pens.ac.id/">Kunjungi</a></p>
                        </div>
                    </div>
                </div>

            </div>
        </section><!-- End Featured Section -->

</div>
