<?php

namespace backend\controllers;

use Yii;
use backend\models\Student;
use backend\models\StudentForm;
use backend\models\SearchStudent;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\data\Pagination;
use backend\models\EditStudentForm;

class StudentController extends Controller
{
    // helo123
 
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

 public function actionIndex()
    {
        $model = new StudentForm(); 
        $searchModel = new SearchStudent();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        $dataProvider->setPagination(['pageSize' => 10]);
        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
             'model' => $model,
        ]);
    }


    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }


    public function actionCreate()
    {
        $model = new StudentForm();   
        $student = Student::find()->all();
        if ($model->load(Yii::$app->request->post())&&$model->save()) {
            ;
            // var_dump($model);
            // die();
            return $this->redirect(['index']);
        }
        return $this->render('create', [
            'model' => $model,
        ]);
    }

    public function actionUpdate($id)
    {
    
        $model = $this->findModel($id);
        $model->updated_at=time();
        $searchModel = new SearchStudent();
        if ($model->load(Yii::$app->request->post()) ) {
            $model->password_hash=password_hash($model->user, PASSWORD_DEFAULT);
            $model->save();
            return $this->redirect(['index']);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    

    }

    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    protected function findModel($id)
    {
        if (($model = Student::find()->where(['id' => $id])->one()) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

}
