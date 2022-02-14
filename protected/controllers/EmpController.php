<?php

class EmpController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
            array('allow', // allow authenticated user to perform 'leavereq' action
				'actions'=>array('leavereq'),
				'users'=>array('@'),
			),
		);
	}

	public function actionLoginemp()
	{
		$model=new LoginempForm;

		// if it is ajax validation request
		if(isset($_POST['ajax']) && $_POST['ajax']==='login-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}

		// collect user input data
		if(isset($_POST['LoginempForm']))
		{
			$model->attributes=$_POST['LoginempForm'];
			// validate user input and redirect to the previous page if valid
			if($model->validate() && $model->loginemp())
				$this->redirect(Yii::app()->user->returnUrl);
		}
		// display the login form
		$this->render('loginemp',array('model'=>$model));
	}

    public function actionLeavereq()
	{
		$model=new LeavereqForm;
		if(isset($_POST['LeavereqForm'])){
			$model->attributes=$_POST['LeavereqForm'];
			$model->leavereq();
			$this->redirect(Yii::app()->user->returnUrl);
		}
		$this->render('leavereq',array('model'=>$model));
	}


	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('User');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return User the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=User::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param User $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='user-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}

	
}
