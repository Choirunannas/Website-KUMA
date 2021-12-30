<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\DataA25 */

$this->title = 'Update Data A25: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Data A25s', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="data-a25-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
