<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\grid\ActionColumn;

$this->title = 'Lớp học';
$this->params['breadcrumbs'][] = $this->title;
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
                <h2 class="card-title" style="padding-left:20px; color:orange"> Lớp học</h2>
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

            //'id',
            'name',
            'teacher_id',
            'number_student',
            ['class' => ActionColumn::className(),'template'=>'{update} {delete}' ],
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
a{
  font-family: Arial;
}
</style>