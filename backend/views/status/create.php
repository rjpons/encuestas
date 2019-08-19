<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Status */

$this->title = 'Alta Nuevo Estado';
$this->params['breadcrumbs'][] = ['label' => 'Statuses', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="status-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>