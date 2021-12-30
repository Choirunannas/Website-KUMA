<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\DataA25 */

$this->title = 'Create Data A25';
$this->params['breadcrumbs'][] = ['label' => 'Data A25s', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="data-a25-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
