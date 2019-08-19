<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\UserType */

$this->title = 'Alta Tipo de Usuario';
$this->params['breadcrumbs'][] = ['label' => 'User Types', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-type-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
