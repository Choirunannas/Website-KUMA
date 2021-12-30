<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\DataA21 */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="data-a21-form">

    <?php $form = ActiveForm::begin(); ?>

    
    <?= $form->field($model, 'pelaksanaan_pendidikan')->dropDownlist(['Asisten Ahli'=>'Asisten Ahli','Lektor/Lektor Kepala/Profesor'=>'Lektor/Lektor Kepala/Profesor']) ?>

    <?= $form->field($model, 'angka_kredit')->dropDownlist(['5'=>'Asisten Ahli : 10 sks','5,5'=>'Asisten Ahli : 12 sks','10'=>'Lektor/Lektor Kepala/Profesor : 10 sks','11'=>'Lektor/Lektor Kepala/Profesor : 12 sks']) ?>
    
    <?= $form->field($model, 'tempat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tanggal')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'keterangan')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
