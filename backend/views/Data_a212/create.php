<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\DataA212 */

$this->title = 'Create Data A212';
$this->params['breadcrumbs'][] = ['label' => 'Data A212s', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="data-a212-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
