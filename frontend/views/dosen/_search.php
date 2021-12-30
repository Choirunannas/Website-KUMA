<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\DosenSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="dosen-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'Id_dosen') ?>

    <?= $form->field($model, 'Nama') ?>

    <?= $form->field($model, 'NIP') ?>

    <?= $form->field($model, 'NIDN') ?>

    <?= $form->field($model, 'Pangkat') ?>

    <?php // echo $form->field($model, 'Jabatan') ?>

    <?php // echo $form->field($model, 'Unit_Kerja') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
