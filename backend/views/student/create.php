<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Student */

$this->title = 'Thêm học sinh';
$this->params['breadcrumbs'][] = ['label' => 'Students', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<form>
              <div class="input-group no-border">
                <input type="text" value="" class="form-control" placeholder="Search...">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <i class="nc-icon nc-zoom-split"></i>
                  </div>
                </div>
              </div>
            </form>
            <ul class="navbar-nav">     
              <li class="nav-item">
                <a class="nav-link btn-rotate" href="#pablo">
                  <i class="nc-icon nc-settings-gear-65"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Account</span>
                  </p>
                </a>
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
    <h3><?= Html::encode($this->title) ?></h3>

   <?= $this->render('_form', [
        'model' => $model,
    ]) ?>


</div>  </div>
</div>
</div>
 