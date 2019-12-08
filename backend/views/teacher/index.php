<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\grid\ActionColumn;

$this->title = 'Giáo viên';
$this->params['breadcrumbs'][] = $this->title;
?>

              <?php  echo $this->render('_search', ['model' => $searchModel]); ?>
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
                <h2 class="card-title" style="padding-left:20px; color:orange"> Danh sách giáo viên</h2>
                <div style="float: right; padding-right: 15px">
        <?= Html::a('Thêm', ['create'], ['class' => 'btn btn-success']) ?>
        </div>
    </div>
        
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
         'options' => [
        'class' => 'YourCustomTableClass',],
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            
            'user',
            'fullname',
            'name',
            [
                'attribute'=>'sex',
                'value'=>function($data)
                {
                    return $data->sex=='1' ? 'Nữ':'Nam';
                }

            ],
            [
                'attribute'=>'status',
                 'content'=>function($data)
                // {
                //     return $data->status=='1' ? 'Kích hoạt':'Khoá';
                // }
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
            
            ['class' => ActionColumn::className(),'template'=>' {update}{delete}' ],
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
.blue{
    color:grey;
}
a{
    font-family: Arial;
}
</style>