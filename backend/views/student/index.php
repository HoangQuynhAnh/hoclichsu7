<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\grid\ActionColumn;
use yii\helpers\ArrayHelper;
use backend\models\ClassRoom;
use yii\widgets\ActiveForm;

$this->title = 'Học sinh';
$this->params['breadcrumbs'][] = $this->title;
?>
 <?php  echo $this->render('_search', ['model' => $searchModel]); ?>
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
                <h2 class="card-title" style="padding-left:20px; color:orange"> Danh sách học sinh</h2>
                <div style="float: right; padding-right: 15px">
        <?= Html::a('Thêm', ['create'], ['class' => 'btn btn-success']) ?>
        </div>
    </div>
        
   
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel'=>$searchModel,
        // 'searchModel' => $searchModel,
         'options' => [
        'class' => 'YourCustomTableClass',],
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'user',
            'name',
            [
              'attribute'=>'classid',
              'content'=>function($data){
                $classname=ClassRoom::find()->where(['id'=>$data->classid])->one(); 
               return $classname['name'];  
              }
            ],
             [
                'attribute'=>'status',
                 'content'=>function($data)
                 {
                    if($data->status=='1'){
                        return Html::a(
                        '<span class="glyphicon glyphicon-ok blue"></span>', 
                        '');
                    }
                    else{
                        return Html::a(
                        '<span class="glyphicon glyphicon-lock blue"></span>', 
                        '');
                    }
                }

            ],
            'created_at:date',
            'updated_at:date',
            ['class' => ActionColumn::className(),'template'=>' {update} {delete}' ],
        ],
    ]); ?>
    </div>
</div>
</div>
</div>
<style>
    .YourCustomTableClass  {
    background-color: white;
    padding: 30px;

}
#w1-filters{
  visibility: collapse;
}
.blue{
    color:grey;
}

a{
    font-family: Arial;
}
</style>