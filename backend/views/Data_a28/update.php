<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\DataA28 */

$this->title = 'Update Data A28: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Data A28s', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="data-a28-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
