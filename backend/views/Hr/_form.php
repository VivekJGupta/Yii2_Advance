<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Hr */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="hr-form col-md-4">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'name')->textInput(['maxlength' => true, 'class' => 'form-control']) ?>
        <br>

        <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>
        <br>

        <?= $form->field($model, 'password')->passwordInput(['maxlength' => true]) ?>
        <br>

        <div class="form-group">
            <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
        </div>
    

    <?php ActiveForm::end(); ?>

</div>
