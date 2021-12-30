<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\AtasanSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="atasan-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'Id_atasan') ?>

    <?= $form->field($model, 'Nama') ?>

    <?= $form->field($model, 'NIP') ?>

    <?= $form->field($model, 'Pangkat') ?>

    <?= $form->field($model, 'Jabatan') ?>

    <?php // echo $form->field($model, 'Unit_Kerja') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
