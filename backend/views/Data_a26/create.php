<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\DataA26 */

$this->title = 'Create Data A26';
$this->params['breadcrumbs'][] = ['label' => 'Data A26s', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="data-a26-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
