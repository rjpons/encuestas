<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Campania */

$this->title = 'Update Campania: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Campanias', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="campania-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
