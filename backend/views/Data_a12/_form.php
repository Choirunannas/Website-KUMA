<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\DataA12 */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="data-a12-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'pendidikan')->dropDownlist(['Mengikuti diklat prajabatan golongan 3'=>'Mengikuti diklat prajabatan golongan 3'])  ?>

    <?= $form->field($model, 'angka_kredit')->dropDownlist(['3'=>'Mengikuti diklat prajabatan golongan 3']) ?>

    <?= $form->field($model, 'tempat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tanggal')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'keterangan')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
