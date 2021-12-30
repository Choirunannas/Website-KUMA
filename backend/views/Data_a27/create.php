<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\DataA27 */

$this->title = 'Create Data A27';
$this->params['breadcrumbs'][] = ['label' => 'Data A27s', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="data-a27-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
