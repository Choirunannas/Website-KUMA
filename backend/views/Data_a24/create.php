<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\DataA24 */

$this->title = 'Create Data A24';
$this->params['breadcrumbs'][] = ['label' => 'Data A24s', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="data-a24-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
