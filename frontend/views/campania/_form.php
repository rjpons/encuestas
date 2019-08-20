<?php
use dosamigos\tinymce\TinyMce;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Campania */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="campania-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'user_id')->hiddenInput(['value' => Yii::$app->user->getId() ])->label(false) ?>

<p>La Primera Pregunta es obligatoria. De la pregunta 1 a 7 la repuesta es un 
valor de 1 a 5 (Mal/Regular/Bien/Muy Bien/Excelente) las preguntas 8 y 9 tienen como repuesta un texto.  </p>

    <div class="row">
        <div class="col-lg-4">
    <?= $form->field($model, 'campo1')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-lg-4">
    <?= $form->field($model, 'campo2')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-lg-4">
    <?= $form->field($model, 'campo3')->textInput(['maxlength' => true]) ?>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-4">    
    <?= $form->field($model, 'campo4')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-lg-4">
    <?= $form->field($model, 'campo5')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-lg-4">
    <?= $form->field($model, 'campo6')->textInput(['maxlength' => true]) ?>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-4">      
    <?= $form->field($model, 'campo7')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-lg-4">
    <?= $form->field($model, 'campotexto1')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-lg-4">
    <?= $form->field($model, 'campotexto2')->textInput(['maxlength' => true]) ?>
        </div>
    </div>

	<?= $form->field($model, 'comentario')->widget(TinyMce::className(), [
	'options' => ['rows' => 6],
	'language' => 'es',
	'clientOptions' => [
	'plugins' => [
	"advlist autolink lists link charmap print preview anchor",
	"searchreplace visualblocks code fullscreen",
	"insertdatetime media table contextmenu paste"
	],
	'menubar' =>" edit insert table ",
	'toolbar' => "undo redo | styleselect | bold italic | alignleft aligncenter
	alignright alignjustify | bullist numlist outdent indent | link image"
	]
	]);?>	

    <div class="form-group">
        <?= Html::submitButton('Guardar', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
