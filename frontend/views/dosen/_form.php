<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Dosen */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="dosen-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Nama')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'NIP')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'NIDN')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Pangkat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Jabatan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Unit_Kerja')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
