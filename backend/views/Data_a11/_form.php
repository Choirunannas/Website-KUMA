<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\DataA11 */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="data-a11-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'pendidikan')->dropDownList(['Mengikuti pendidikan formal dan memperoleh gelar/sebutan/ijazah'=>'Mengikuti pendidikan formal dan memperoleh gelar/sebutan/ijazah : Doktor',
    'Mengikuti pendidikan formal dan memperoleh gelar/sebutan/ijazah : Magister'=>'Mengikuti pendidikan formal dan memperoleh gelar/sebutan/ijazah : Magister']) ?>
   
    <?= $form->field($model, 'angka_kredit')->dropDownlist(['200'=>'Doktor: 200','150'=>'Magister: 150']) ?>

    <?= $form->field($model, 'tempat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tanggal')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'keterangan')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
