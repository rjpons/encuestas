<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Resultcampa */

$this->title = 'Update Resultcampa: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Resultcampas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="resultcampa-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
