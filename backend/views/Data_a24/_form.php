<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\DataA24 */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="data-a24-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'pelaksana_pendidikan')->dropDownlist(['1.Pembimbing Utama per orang(setiap mahasiswa)'=>'1.Pembimbing Utama per orang(setiap mahasiswa)','2.Pembimbing Pembantu per orang(setiap mahasiswa)'=>'2.Pembimbing Pembantu per orang(setiap mahasiswa)']) ?>

    <?= $form->field($model, 'angka_kredit')->dropDownlist(['8'=>'1.Disertasi : 4 Lulusan','3'=>'1.Tesis : 6 Lulusan','1'=>'1.Skripsi : 8 Lulusan','1'=>'1.Laporan Akhir Studi : 10 Lulusan',
   '6'=>'2.Disertasi : 4 Lulusan','2'=>'2.Tesis : 6 Lulusan','0,5'=>'2.Skripsi : 8 Lulusan','0,5'=>'2.Laporan Akhir Studi : 10 Lulusan', ]) ?>

    <?= $form->field($model, 'tempat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tanggal')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'keterangan')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
