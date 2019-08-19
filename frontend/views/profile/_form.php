<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\date\DatePicker;

/* @var $this yii\web\View */
/* @var $model frontend\models\Profile */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="profile-form">

    <?php $form = ActiveForm::begin(); ?>


	<?= $form->field($model, 'first_name')->textInput(['maxlength' => 45]) ?>
	
	<?= $form->field($model, 'last_name')->textInput(['maxlength' => 45]) ?>

	<br/>
	<?php 
	
	
		echo '<label>Cumple </label>';
		echo DatePicker::widget([
		'model' => $model,
		'attribute' => 'birthdate',
		'type' => DatePicker::TYPE_INPUT,
		'language' => 'es',
		'value' => $model->birthdate,
		'options' => ['placeholder' => 'Seleccionar fecha ...'],
		'pluginOptions' => [
		'format' => 'yyyy-mm-dd',
		'autoclose'=>true,
		]	
		]);	
	
	?>
	
	<br/>

    <?= $form->field($model, 'gender_id')->dropDownList($model->genderList,['prompt' => 'Please Choose One' ]);?>

    <?= $form->field($model, 'telefono')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'direccion')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Guardar', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
