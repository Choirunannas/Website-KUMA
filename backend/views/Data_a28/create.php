<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\DataA28 */

$this->title = 'Create Data A28';
$this->params['breadcrumbs'][] = ['label' => 'Data A28s', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="data-a28-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
