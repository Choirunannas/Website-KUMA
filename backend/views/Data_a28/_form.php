<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\DataA28 */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="data-a28-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'pelaksana_pendidikan')->dropDownList(['Buku Ajar'=>'Buku Ajar','Diktat Modul, Petunjuk praktikum model, Alat bantu, Audio visual, Naskah tutorial, job sheet praktikum terkait dengan mata kuliah yang diampu'=>'Diktat Modul, Petunjuk praktikum model, Alat bantu, Audio visual, Naskah tutorial, job sheet praktikum terkait dengan mata kuliah yang diampu']) ?>

    <?= $form->field($model, 'angka_kredit')->dropDownlist(['20'=>'1 buku/tahun','5'=>'1 produk/semester']) ?>
    
    <?= $form->field($model, 'tempat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tanggal')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'keterangan')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
