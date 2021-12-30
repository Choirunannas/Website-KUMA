<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Atasan */

$this->title = 'Update Atasan: ' . $model->Id_atasan;
$this->params['breadcrumbs'][] = ['label' => 'Atasans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Id_atasan, 'url' => ['view', 'id' => $model->Id_atasan]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="atasan-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
