<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\SearchStudent */
/* @var $form yii\widgets\ActiveForm */
?>

<?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>
              <div class="input-group no-border">        
    <?= $form->field($model, 'name')->textInput(['placeholder' => "Tên học sinh"])->label(false)?>

                <div class="input-group-append">
                 
                    <?= Html::submitButton('', ['class' => 'nc-icon nc-zoom-split']) ?>
              
                </div>
              </div>
             <?php ActiveForm::end(); ?>
    
    <style> 
    #searchstudent-name{
  width: 250px;
}</style>