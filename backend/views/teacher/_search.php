<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\teacherSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>
              <div class="input-group no-border">        
    <?= $form->field($model, 'name')->textInput(['placeholder' => "Tên giáo viên"])->label(false)?>

                <div class="input-group-append">
               
                    <?= Html::submitButton('', ['class' => 'nc-icon nc-zoom-split']) ?>
                  
                </div>
              </div>
             <?php ActiveForm::end(); ?>
    
    <style> 
    #teachersearch-name{
  width: 250px;
}</style>
<style>
   #teachersearch-user{
        width: 50px;
        padding-left: 100px;
        margin-left:30px;
        float:left;
    }
    .form-group{
        float:left;
        margin-left:130px;
        height: 20px;
    }
    .btn .btn-primary{
        height: 20px;
    }
</style>
