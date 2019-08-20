<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Resultcampa */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="resultcampa-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'campo1')->textInput() ?>

    <?= $form->field($model, 'campo2')->textInput() ?>

    <?= $form->field($model, 'campo3')->textInput() ?>

    <?= $form->field($model, 'campo4')->textInput() ?>

    <?= $form->field($model, 'campo5')->textInput() ?>

    <?= $form->field($model, 'campo6')->textInput() ?>

    <?= $form->field($model, 'campo7')->textInput() ?>

    <?= $form->field($model, 'texto1')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'texto2')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
