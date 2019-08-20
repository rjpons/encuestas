<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Resultcampa */

$this->title = 'Create Resultcampa';
$this->params['breadcrumbs'][] = ['label' => 'Resultcampas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="resultcampa-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
