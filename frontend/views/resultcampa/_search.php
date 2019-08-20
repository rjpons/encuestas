<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\ResultcampaSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="resultcampa-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'campo1') ?>

    <?= $form->field($model, 'campo2') ?>

    <?= $form->field($model, 'campo3') ?>

    <?= $form->field($model, 'campo4') ?>

    <?php // echo $form->field($model, 'campo5') ?>

    <?php // echo $form->field($model, 'campo6') ?>

    <?php // echo $form->field($model, 'campo7') ?>

    <?php // echo $form->field($model, 'texto1') ?>

    <?php // echo $form->field($model, 'texto2') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
