<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\DataA23 */

$this->title = 'Create Data A23';
$this->params['breadcrumbs'][] = ['label' => 'Data A23s', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="data-a23-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
