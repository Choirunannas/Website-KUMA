<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\DataA22 */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="data-a22-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'pelaksanaan_pendidikan')->dropDownlist(['Membimbing seminar Mahasiswa(setiap semester)'=>'Membimbing seminar Mahasiswa(setiap semester)']) ?>

    <?= $form->field($model, 'angka_kredit')->dropDownlist(['1'=>'1 Mahasiswa','2'=>'2 Mahasiswa','3'=>'3 Mahasiswa']) ?>

    <?= $form->field($model, 'tempat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tanggal')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'keterangan')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
