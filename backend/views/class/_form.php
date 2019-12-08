<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use backend\models\Teacher;
/* @var $this yii\web\View */
/* @var $model backend\models\Classroom */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="classroom-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'teacher_id')->dropDownList(
    	ArrayHelper::map(Teacher::find()->all(),'id','name'),
    	[
    		'prompt'=>'Danh sách giáo viên'
    	]
    ) ?>

    <?= $form->field($model, 'number_student')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Lưu', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
<style>
    #classroom-teacher_id{
        height: 40px;
    }
    .form-group label{
        color: #f1926e;
        font-size: 16px;
        /*51cbce, #007bff*/
    }

</style>

