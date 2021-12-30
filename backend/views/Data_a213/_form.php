<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\DataA213 */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="data-a213-form">

    <?php $form = ActiveForm::begin(); ?>

   
    <?= $form->field($model, 'pelaksana_pendidikan')->dropDownList(['Melaksanakan pengembangan diri untuk meningkatkan kompetensi'=>'Melaksanakan pengembangan diri
    untuk meningkatkan kompetensi']) ?>

    <?= $form->field($model, 'angka_kredit')->dropDownlist(['15'=>'Lamanya lebih dari 960 Jam ','9'=>'Lamanya antara 641- 960 jam','6'=>'Lamanya antara 481- 640 jam','3'=>'Lamanya antara 161-480 jam','2'=>'Lamanya antara 81-160 jam','1'=>'Lamanya antara 30-80 jam','0,5'=>'Lamanya antara 10-30 jam']) ?>

    <?= $form->field($model, 'tempat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tanggal')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'keterangan')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
