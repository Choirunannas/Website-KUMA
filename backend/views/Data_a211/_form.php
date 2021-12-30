<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\DataA211 */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="data-a211-form">

    <?php $form = ActiveForm::begin(); ?>

    
   <?= $form->field($model, 'pelaksana_pendidikan')->dropDownList(['Membimbing dosen yang mempunyai jabatan akademik lebih rendah setiapsemester (bagi dosen Lektor Kepala ke atas): Pembimbing pencangkokan'=>'Membimbing dosen yang mempunyai
   jabatan akademik lebih rendah setiap semester (bagi dosen Lektor Kepala ke atas):Pembimbing pencangkokan','bagi dosen Lektor Kepala ke atas): Reguler'=>'Membimbing dosen yang mempunyai
   jabatan akademik lebih rendah setiap semester (bagi dosen Lektor Kepala ke atas):Reguler']) ?>

   <?= $form->field($model, 'angka_kredit')->dropDownlist(['2'=>'Pembimbing pencangkokan : 1 orang','4'=>'Pembimbing pencangkokan : 2 orang','1'=>'Reguler : 1 orang','2'=>'Reguler : 2 orang']) ?>

    <?= $form->field($model, 'tempat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tanggal')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'keterangan')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
