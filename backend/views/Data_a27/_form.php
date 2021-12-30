<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\DataA27 */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="data-a27-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'pelaksana_pendidikan')->dropDownlist([' Mengembangkan program kuliah yang mempunyai nilai kebaharuan metode atau substarsi (setiap produk)' => ' Mengembangkan program kuliah yang mempunyai nilai kebaharuan metode atau substansi (setiap produk)']) ?>

    <?= $form->field($model, 'angka_kredit')->dropDownlist(['2' => '1 file produk', '4' => '2 file produk']) ?>

    <?= $form->field($model, 'tempat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tanggal')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'keterangan')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
