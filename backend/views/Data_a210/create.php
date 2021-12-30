<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\DataA210 */

$this->title = 'Create Data A210';
$this->params['breadcrumbs'][] = ['label' => 'Data A210s', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="data-a210-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
