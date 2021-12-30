<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\DataA213 */

$this->title = 'Create Data A213';
$this->params['breadcrumbs'][] = ['label' => 'Data A213s', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="data-a213-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
