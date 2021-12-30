<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\DataA22 */

$this->title = 'Create Data A22';
$this->params['breadcrumbs'][] = ['label' => 'Data A22s', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="data-a22-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
