<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\DataA26 */

$this->title = 'Update Data A26: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Data A26s', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="data-a26-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
