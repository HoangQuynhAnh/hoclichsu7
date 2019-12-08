<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use backend\models\ClassRoom;

/* @var $this yii\web\View */
/* @var $model backend\models\Teacher */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="teacher-form">

    <?php $form = ActiveForm::begin(); ?>
    <?= $form->field($model, 'user')->textInput() ?>
    <?= $form->field($model, 'fullname')->textInput() ?>
    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'sex')->dropDownList(
        [
            '1'=>'Nữ',
            '0'=>'Nam',
        ],
    ) ?>
    <?= $form->field($model, 'status')->dropDownList(
        [
            '1'=>'Kích hoạt',
            '0'=>'Khoá',
        ],
    ) ?>
    <div class="form-group">
        <?= Html::submitButton('Lưu', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
<style>
    #teacher-status, #teacher-sex{
        height: 40px;
    }
    .form-group label{
        color: #f1926e;
        font-size: 16px;
        /*51cbce, #007bff*/
    }

</style>
