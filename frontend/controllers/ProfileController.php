<?php

namespace frontend\controllers;

use Yii;
use frontend\models\Profile;
use frontend\models\ProfileSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use common\models\PermissionHelpers;
use common\models\RecordHelpers;

/**
 * ProfileController implements the CRUD actions for Profile model.
 */
class ProfileController extends Controller
{
    /**
     * @inheritdoc
     */
	public function behaviors()
	{
		return [
		
		/*
		'access' => [
			'class' => \yii\filters\AccessControl::className(),
			'only' => ['index', 'view','create', 'update', 'delete'],
			'rules' => [
			[
			'actions' => ['index', 'view','create', 'update', 'delete'],
			'allow' => true,
			'roles' => ['@'],
				],
			],
		],
		*/
		'access2' => [
			'class' => \yii\filters\AccessControl::className(),
			'only' => ['index', 'view','create', 'update', 'delete'],
			'rules' => [
			[
			'actions' => ['index', 'view','create', 'update', 'delete'],
			'allow' => true,
			'roles' => ['@'],
			'matchCallback' => function ($rule, $action) {
				return PermissionHelpers::requireStatus('Activo');
				}
				],
			],
		],		
		
		
		
		'verbs' => [
		'class' => VerbFilter::className(),
		'actions' => [
		'delete' => ['post'],
				],
			],
		];
	}

    /**
     * Lists all Profile models.
     * @return mixed
     */
    public function actionIndex()
		{
			if ($already_exists = RecordHelpers::userHas('crm_profile')) {
			return $this->render('view', [
			'model' => $this->findModel($already_exists),
			]);
			} else {
			return $this->redirect(['create']);
			}
		}

    /**
     * Displays a single Profile model.
     * @param string $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
	{
		if ($already_exists = RecordHelpers::userHas('crm_profile')) {
		return $this->render('view', [
		'model' => $this->findModel($already_exists),
		]);
		} else {
		return $this->redirect(['create']);
		}
	}

    /**
     * Creates a new Profile model.
     */
    public function actionCreate()
	{
		$model = new Profile;
		$model->user_id = \Yii::$app->user->identity->id;
		if ($already_exists = RecordHelpers::userHas('crm_profile')) {
		return $this->render('view', [
		'model' => $this->findModel($already_exists),
		]);
		} elseif ($model->load(Yii::$app->request->post()) && $model->save()){
		return $this->redirect(['view']);
		} else {
		return $this->render('create', [
		'model' => $model,
		]);
		}
	}

    /**
     * Updates an existing Profile model.
     */
    public function actionUpdate($id)
	{
		
		PermissionHelpers::requireUpgradeTo('Pago');
		if($model = Profile::find()->where(['user_id' => Yii::$app->user->identity->id])->one()) {
		if ($model->load(Yii::$app->request->post()) && $model->save()) {
		return $this->redirect(['index']);
		} else {
		return $this->render('update', [
		'model' => $model,
		]);
		}
		} else {
		throw new NotFoundHttpException('No tiene profile.');
		}
	}

    /**
     * Deletes an existing Profile model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
	{
		$model = Profile::find()->where(['user_id' => Yii::$app->user->id])->one();
		$this->findModel($model->id)->delete();
		return $this->redirect(['site/index']);
	}

    /**
     * Finds the Profile model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $id
     * @return Profile the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Profile::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('La página solicitada no existe.');
    }
}
