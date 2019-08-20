<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Campania */

$this->title = 'Alta de Campaña';
$this->params['breadcrumbs'][] = ['label' => 'Campanias', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="campania-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
