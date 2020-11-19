<?php

namespace backend\controllers;

use frontend\models\Banner;
use Yii;
use frontend\models\Form;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\helpers\Url;


/**
 * FormController implements the CRUD actions for Form model.
 */
class FormController extends BaseController
{
    public $enableCsrfValidation = false;
    /**
     * {@inheritdoc}
     */
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

    /**
     * Lists all Form models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel =  new Form();
        return $this->render('index', [
            'searchModel' =>$searchModel
        ]);

//        $searchModel =  new Form();
//        $dataProvider = new ActiveDataProvider([
//            'query' => Form::find(),
//        ]);
//
//        return $this->render('index', [
//            'dataProvider' => $dataProvider,
//            'searchModel' =>$searchModel
//        ]);
    }

    /**
     * Displays a single Form model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Form model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {

        $model = new Form();
        //return $this->redirect(Yii::$app->request->referrer ?: Yii::$app->homeUrl);

        if ($model->load(Yii::$app->request->post())) {
            $model->date = time();
            $model->status = 1;
            if ($model->save()) {
                $baseUrl = str_replace('admin','',Url::base(true));
                $session = Yii::$app->session;
                $session->set('form_id',$model->id);
                Yii::$app->session->setFlash('success', "Lưu thành công!");

                return $this->redirect('/quizz');
                exit;
            } else {
                foreach ($model->errors as $item) {
                    Yii::$app->session->setFlash('error', $item);
                }

            }
        } else {
            Yii::$app->session->setFlash('success', "Lưu thất bại!");
        }

        return $this->redirect(Yii::$app->request->referrer ?: Yii::$app->homeUrl);
    }

    /**
     * Updates an existing Form model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['index']);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Form model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Form model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Form the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Form::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
