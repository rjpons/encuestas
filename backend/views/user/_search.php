<?php

	use yii\helpers\Html;
	use yii\widgets\ActiveForm;
	use common\models\User;
	/* @var $this yii\web\View */
	/* @var $model backend\models\search\UserSearch */
	/* @var $form yii\widgets\ActiveForm */
	?>
	
	<div class="user-search">
	<?php $form = ActiveForm::begin([
		'action' => ['index'],
		'method' => 'get',
	]); 
	?>
	<?= $form->field($model, 'id') ?>
	<?= $form->field($model, 'username') ?>
	<?php echo $form->field($model, 'email') ?>
	<?= $form->field($model, 'role_id')->dropDownList(User::getroleList(),[ 'prompt' => 'Seleccionar' ]);?>
	<?= $form->field($model, 'user_type_id')->dropDownList(User::getuserTypeList(),[ 'prompt' => 'Seleccionar' ]);?>
	<?= $form->field($model, 'status_id')->dropDownList($model->statusList,	[ 'prompt' => 'Seleccionar' ]);?>
	<div class="form-group">
	<?= Html::submitButton('Buscar', ['class' => 'btn btn-primary']) ?>
	<?= Html::resetButton('Resetear', ['class' => 'btn btn-default']) ?>
	</div>
	<?php ActiveForm::end(); ?>

</div>
