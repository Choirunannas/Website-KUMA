<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\Data_a26Search */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Data A26s';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="data-a26-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Data A26', ['create'], ['class' => 'btn btn-success']) ?>
        <?= Html::a('Export Excell', ['excell'], ['class' => 'btn btn-danger']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'pelaksana_pendidikan',
            'angka_kredit',
            'tempat',
            'tanggal',
            'keterangan',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
