<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\DataA26 */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="data-a26-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'pelaksana_pendidikan')->dropDownlist(['Membina kegiatan mahasiswa dibidang akademik dan kemahasiswaan, termasuk dalam kegiatan ini adalah membimbing mahasiswa menghasilkan produk saintik (setiap semester)'=>'Membina kegiatan mahasiswa dibidang akademik dan kemahasiswaan, termasuk dalam kegiatan ini adalah membimbing mahasiswa menghasilkan produk saintik (setiap semester)']) ?>

    <?= $form->field($model, 'angka_kredit')->dropDownlist(['2'=>'2 Kegiatan/per semester','4'=>'4 Kegiatan/per semester','6'=>'6 Kegiatan/per semester']) ?>

    <?= $form->field($model, 'tempat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tanggal')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'keterangan')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
