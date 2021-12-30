<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\DataA23 */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="data-a23-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'pelaksana_pendidikan')->dropDownlist(['Membimbing KKN, Praktik Kerja Praktik Kerja Iapangan (setiap semester)'=>'Membimbing KKN, Praktik Kerja Praktik Kerja Iapangan (setiap semester)']) ?>

    <?= $form->field($model, 'angka_kredit')->dropDownlist(['1'=>'1 Mahasiswa','2'=>'2 Mahasiswa','3'=>'3 Mahasiswa']) ?>

    <?= $form->field($model, 'tempat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tanggal')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'keterangan')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
