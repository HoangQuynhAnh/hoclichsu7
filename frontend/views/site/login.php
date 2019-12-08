<?php
 use yii\helpers\Html;

use yii\bootstrap\ActiveForm;
 ?>

<div class="row" style="background-color: lightgrey">

    <div class="container" style="background-color: white; padding-top: 70px
; padding-bottom: 70px">

        <div  style="width: 40%; margin: auto; padding: 1%; border: 1px solid #3399CC">
            <div class="panel panel-default">
                <div class="panel-heading" style="padding-bottom: 2%;
                font-weight: bolder; font-size: 135%"> Đăng nhập</div>
                <div class="panel-body">
            <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>
                <?= $form->field($model, 'username')->textInput(['autofocus' => true, 'class'=>'form-control', 'placeholder'=>'Tên đăng nhập', 'required'=>'']) ?>
                 <?= $form->field($model, 'password')->passwordInput(['class'=>'form-control', 'placeholder'=>'Mật khẩu', 'required'=>'']) ?>

               
                <div class="form-check" style="padding-bottom: 1%">
                    <?= $form->field($model, 'rememberMe')->checkbox() ?>
                   
                </div>
                <?= Html::submitButton('Đăng nhập', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
            
                <span><a href="">Quên mật khẩu</a></span>
           <?php ActiveForm::end(); ?>
                    </div>
            </div>
        </div>

    </div>

</div>