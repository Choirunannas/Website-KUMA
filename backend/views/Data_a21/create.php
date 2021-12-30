<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\DataA21 */

$this->title = 'Create Data A21';
$this->params['breadcrumbs'][] = ['label' => 'Data A21s', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="data-a21-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
