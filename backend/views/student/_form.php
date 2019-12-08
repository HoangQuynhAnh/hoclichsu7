<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use backend\models\ClassRoom;

/* @var $this yii\web\View */
/* @var $model backend\models\Student */
/* @var $form yii\widgets\ActiveForm */
?>

<?php $form = ActiveForm::begin(); ?>
    <?= $form->field($model, 'user')->textInput() ?>
    <?= $form->field($model, 'status')->dropDownList(
        [
            '1'=>'Kích hoạt',
            '0'=>'Khoá',
        ],
    )?>
     <?= $form->field($model, 'classid')->dropDownList(
        ArrayHelper::map(ClassRoom::find()->all(),'id','name'),
        [
            'prompt'=>'---Danh sách lớp học---'
        ]
    ) ?>
    <?= $form->field($model, 'name')->textInput() ?>
    <div class="form-group">
     <?= Html::submitButton('Lưu', ['class' => 'btn btn-success']) ?>
    </div>
    <?php ActiveForm::end(); ?>
    <style>
    #studentform-status,#student-status, #studentform-classid,#student-classid{
        height: 40px;
    }
    .form-group label{
        color: #f1926e;
        font-size: 16px;
        font-family: Arial;
        /*51cbce, #007bff*/
    }

</style>

