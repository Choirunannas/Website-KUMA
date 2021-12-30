<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\DataA12 */

$this->title = 'Create Data A12';
$this->params['breadcrumbs'][] = ['label' => 'Data A12s', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="data-a12-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
