<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Atasan */

$this->title = 'Create Atasan';
$this->params['breadcrumbs'][] = ['label' => 'Atasans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="atasan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
