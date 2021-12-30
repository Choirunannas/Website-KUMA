<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\DataA11 */

$this->title = 'Create Data A11';
$this->params['breadcrumbs'][] = ['label' => 'Data A11s', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="data-a11-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
