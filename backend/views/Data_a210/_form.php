<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\DataA210 */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="data-a210-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'pelaksana_pendidikan')->dropDownList(['Menduduki jabatan pimpinan
    perguruan tinggi sesuai tugas pokok,fungsi dan kewenangan dan/atausetara (setiap semester):'=>'Menduduki jabatan pimpinan
    perguruan tinggi sesuai tugas pokok,
    fungsi dan kewenangan dan/atausetara (setiap semester):']) ?>

   <?= $form->field($model, 'angka_kredit')->dropDownlist(['6'=>'1.Rektor','5'=>'2 Wakil rektor/ dekan/ direktur
    program para sarjana/ketua lembaga','4'=>'3. Ketua sekolah tinggi/pembantu dekan/ asisten direktur progam para sarjana/direktur politeknik/kepala LLDikti','4'=>'4 Pembantu ketua sekolah
    tinggi/pembantu dtuektur politeknik','4'=>'5.Direktur Akademi','3'=>'6. Pembantu direktur politeknik,
    ketua jurusan/ bagian pada uniiversitas/ institut/sekolah tinggi']) ?>
    
    <?= $form->field($model, 'tempat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tanggal')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'keterangan')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
