<?php

namespace backend\controllers;

use Yii;
use backend\models\Admin;
use backend\models\teacherSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\data\Pagination;
use backend\controllers\ActiveDataProvider;

class ResetController extends Controller
{
public function actionIndex($id)
    {
    	 $model = $this->findModel($id);
    	 if ($model->load(Yii::$app->request->post())) {
           $password= Yii::$app->request->post('Admin')['password'];
           $password1= Yii::$app->request->post('Admin')['password1'];
           if($password== $password1){
    	 	 $model->password_hash=password_hash($password, PASSWORD_DEFAULT);
    	 	 Yii::$app->db->createCommand('UPDATE user SET password_hash= "'.$model->password_hash.'" where id=1')->execute();
    	         return $this->redirect(['site/index']);
             }
             else{
                 throw new NotFoundHttpException('Password không trùng nhau');
             }
    	}
    	return $this->render('index', [
    	 		'model'=>$model,
    	 		]);
    }
     protected function findModel($id)
    {
        if (($model = Admin::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
 }

?>