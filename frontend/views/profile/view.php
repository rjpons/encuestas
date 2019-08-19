<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use common\models\PermissionHelpers;

/* @var $this yii\web\View */
/* @var $model frontend\models\Profile */

$this->title = "Mi Profile - ID ".$model->id;
$this->params['breadcrumbs'][] = ['label' => 'Profiles', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="profile-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
<?Php
	if (PermissionHelpers::userMustBeOwner('crm_profile', $model->id)) {
	echo Html::a('Editar', ['update', 'id' => $model->id],	['class' => 'btn btn-primary']);
	} 
?>	
	
	

 
        <?= Html::a('Borrar', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => '¿Seguro que quieres eliminar este item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            //'id',
            'user.username',
            'first_name',
            'last_name',
            'birthdate',
            'gender.gender_name',
            'telefono',
            'direccion',
            'created_at',
            'updated_at',
        ],
    ]) ?>

</div>
