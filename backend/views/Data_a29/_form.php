<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\DataA29 */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="data-a29-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'pelaksana_pendidikan')->dropDownList(['Menyampaikan orasi ilmiah di
    tingkat perguruan tinggi'=>'Menyampaikan orasi ilmiah ditingkat perguruan tinggi']) ?>

    <?= $form->field($model, 'angka_kredit')->dropDownlist(['5'=>'2 orasi/semester','10'=>'4 orasi/semester','15'=>'6 orasi/semester']) ?>

    <?= $form->field($model, 'tempat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tanggal')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'keterangan')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
