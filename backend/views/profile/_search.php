<?php

	use yii\helpers\Html;
	use yii\widgets\ActiveForm;
	use frontend\models\Profile;

	/**
	* @var yii\web\View $this
	* @var backend\models\search\ProfileSearch $model
	* @var yii\widgets\ActiveForm $form
	*/
	?>
	<div class="profile-search">

	<?php $form = ActiveForm::begin([
	'action' => ['index'],
	'method' => 'get',
	]); ?>
	<?= $form->field($model, 'first_name') ?>
	<?= $form->field($model, 'last_name') ?>
	<?= $form->field($model, 'birthdate') ?>
	<?= $form->field($model, 'gender_id')->dropDownList(Profile::getgenderList(),[ 'prompt' => 'Seleccionar' ]);?>
	<?php echo $form->field($model, 'telefono') ?>
	<?php echo $form->field($model, 'direccion') ?>
	<?php // echo $form->field($model, 'created_at') ?>
	<?php // echo $form->field($model, 'updated_at') ?>
	<?php // echo $form->field($model, 'user_id') ?>
	<div class="form-group">
	<?= Html::submitButton('Buscar', ['class' => 'btn btn-primary']) ?>
	<?= Html::resetButton('Resetear', ['class' => 'btn btn-default']) ?>
	</div>
	<?php ActiveForm::end(); ?>
</div>