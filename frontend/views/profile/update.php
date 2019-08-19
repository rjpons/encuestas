<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Profile */

$this->title = 'Actualizar profile de '. $model->user->username.' (*)';


$this->params['breadcrumbs'][] = ['label' => 'Profile', 'url' => ['index']];
$this->params['breadcrumbs'][] = 'Editar';
?>
<div class="profile-update">

    <h1><?= Html::encode($this->title) ?></h1>
* El nombre de usuario NO se puede cambiar.-
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
