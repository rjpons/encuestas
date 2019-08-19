<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\User */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="user-form">

	<?php $form = ActiveForm::begin(); ?>
	<?= $form->field($model, 'status_id')->dropDownList($model->statusList,	[ 'prompt' => 'Seleccionar' ]);?>
	
	<?= $form->field($model, 'role_id')->dropDownList($model->roleList,	[ 'prompt' => 'Seleccionar' ]);?>
	
	<?= $form->field($model, 'user_type_id')->dropDownList($model->userTypeList,[ 'prompt' => 'Seleccionar' ]);?>
	
	<?= $form->field($model, 'username')->textInput(['maxlength' => 255]) ?>
	
	<?= $form->field($model, 'email')->textInput(['maxlength' => 255]) ?>
	
	<div class="form-group">
	
	<?= Html::submitButton($model->isNewRecord ? 'Cargar' : 'Editar',	['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
	</div>
	
	<?php ActiveForm::end(); ?>


</div>
