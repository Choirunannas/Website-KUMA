<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\DataA211 */

$this->title = 'Create Data A211';
$this->params['breadcrumbs'][] = ['label' => 'Data A211s', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="data-a211-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
