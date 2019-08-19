<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use common\models\PermissionHelpers;


/* @var $this yii\web\View */
/* @var $model frontend\models\Profile */

$this->title = $model->user->username;
//si no es un superusuario show_this_nav devuelve falso :
$show_this_nav = PermissionHelpers::requireMinimumRole('SuperUser');

$this->params['breadcrumbs'][] = ['label' => 'Profiles', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="profile-view">

    <h1>Perfil de : <?= Html::encode($this->title) ?></h1>

    <p>
	
	<?php 
	//muestra el menu solo si es usuario logeado y ademas superusuario
	if (!Yii::$app->user->isGuest && $show_this_nav) {
		echo Html::a('Modificar', ['update', 'id' => $model->id],
		['class' => 'btn btn-primary']);}
	?>
	<?php if (!Yii::$app->user->isGuest && $show_this_nav) {
		echo Html::a('Borrar', ['delete', 'id' => $model->id], [
		'class' => 'btn btn-danger',
		'data' => [
		'confirm' => Yii::t('app', 'Seguro que quieres eliminar este perfil?'),
		'method' => 'post',
		],
		]);}
	?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
		'attributes' => [
		['attribute'=>'userLink', 'format'=>'raw'],
		'first_name',
		'last_name',
		'birthdate',
		'gender.gender_name',
		'created_at',
		'updated_at',
		'id',
		],
    ]) ?>

</div>
