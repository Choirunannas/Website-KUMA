<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\DataA23 */

$this->title = 'Update Data A23: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Data A23s', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="data-a23-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
