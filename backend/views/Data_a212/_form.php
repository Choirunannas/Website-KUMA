<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\DataA212 */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="data-a212-form">

    <?php $form = ActiveForm::begin(); ?>

    
    <?= $form->field($model, 'pelaksana_pendidikan')->dropDownList(['Melaksanakan kegiatan detasering dan pencangkokan di luar institusi tempat bekerja setiap semester (bagi dosen lektor kepala ke atas):Detasering'=>'Melaksanakan kegiatan detasering
    dan pencangkokan di luar institusi tempat bekerja setiap semester (bagi dosen lektor kepala ke atas):Detasering','Melaksanakan kegiatan detasering dan pencangkokan di luar institusi tempat bekerja setiap semester (bagi dosen lektor kepala ke atas):Detasering'=>'Melaksanakan kegiatan detasering
    dan pencangkokan di luar institusi tempat bekerja setiap semester (bagi dosen lektor kepala ke atas):Pencangkokan']) ?>

    <?= $form->field($model, 'angka_kredit')->dropDownlist(['5'=>'Detasering : 1 orang','10'=>'Detasering : 2 orang','4'=>'Pencangkokan : 1 orang','8'=>'Pencangkokan : 2 orang']) ?>

    <?= $form->field($model, 'tempat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tanggal')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'keterangan')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
