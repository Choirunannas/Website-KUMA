<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\DataA25 */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="data-a25-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'pelaksana_pendidikan')->dropDownlist(['1.Ketua penguji '=>'1. Ketua penguji','2.Anggota penguji '=>'2.Anggota penguji']) ?>

    <?= $form->field($model, 'angka_kredit')->dropDownlist(['1'=>'1.Ketua penguji: 4 Lulusan','2'=>'2.Anggota penguji:8 Lulusan']) ?>
    
    <?= $form->field($model, 'tempat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tanggal')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'keterangan')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
