<?php

class MatrizFormController extends Controller
{
    //acción para realizar el submit del formulario matriz y así realizar la petición
    //para obtener los datos de la suma
	public function actionSubmit()
        {
            $model=new MatrizForm;
            // uncomment the following code to enable ajax-based validation
            /*
            if(isset($_POST['ajax']) && $_POST['ajax']==='matriz-_form-form')
            {
                echo CActiveForm::validate($model);
                Yii::app()->end();
            }
             * 
             */
            
            if(isset($_POST['MatrizForm']))
            {
                $model->attributes=$_POST['MatrizForm'];
                if($model->validate())
                {
                    $matrizOp = new MatrizOperations;
                    $response = implode(',', $matrizOp->controlDatos($_POST['MatrizForm'])) ;
                    $model->setAttributes(array('output' => $response));
                }
            }
            $this->render('submit',array('model'=>$model));
        }

	// Uncomment the following methods and override them if needed
	/*
	public function filters()
	{
		// return the filter configuration for this controller, e.g.:
		return array(
			'inlineFilterName',
			array(
				'class'=>'path.to.FilterClass',
				'propertyName'=>'propertyValue',
			),
		);
	}

	public function actions()
	{
		// return external action classes, e.g.:
		return array(
			'action1'=>'path.to.ActionClass',
			'action2'=>array(
				'class'=>'path.to.AnotherActionClass',
				'propertyName'=>'propertyValue',
			),
		);
	}
	*/
}