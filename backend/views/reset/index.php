<?php 
use yii\helpers\Html;
use yii\grid\GridView;
use yii\grid\ActionColumn;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
 ?>

              <div class="input-group no-border">
              </div>
      
            <ul class="navbar-nav">     
              <li class="nav-item">
            <?php
             echo Html::a('<i class="nc-icon nc-settings-gear-65"></i>',['/reset','id'=>1],['class'=>'nav-link btn-rotate'])
             ?></i>
                
              </li>
            </ul>
          </div>
        </div>
      </nav>
<div><i class="nc-icon nc-simple-add"></i>
  </div>
       <div class="content">
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h2 class="card-title" style="padding-left:20px; color:orange"> Sửa mật khẩu</h2>
                <div style="float: right; padding-right: 15px">
        </div>
    </div>
    <?php $form = ActiveForm::begin(); ?>
     <?= $form->field($model, 'password')->passwordInput()->label('Mật khẩu') ?>
     <?= $form->field($model, 'password1')->passwordInput()->label("Xác nhận mật khẩu") ?>
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
        padding: 10px;
        /*51cbce, #007bff*/
    }
    .form-group{
      padding:10px;
    }
  #admin-password,#admin-password1{
    width: 300px;
  }

</style>
        

   


</div>
