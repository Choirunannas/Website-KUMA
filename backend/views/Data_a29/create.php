<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\DataA29 */

$this->title = 'Create Data A29';
$this->params['breadcrumbs'][] = ['label' => 'Data A29s', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="data-a29-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
