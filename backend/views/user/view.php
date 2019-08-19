<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use common\models\PermissionHelpers;
use frontend\models\Profile;

/* @var $this yii\web\View */
/* @var $model common\models\User */

$this->title = $model->username;
$show_this_nav = PermissionHelpers::requireMinimumRole('SuperUser');
$this->params['breadcrumbs'][] = ['label' => 'Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
	<?php 
		if (!Yii::$app->user->isGuest && $show_this_nav) {
		echo Html::a('Modificar', ['update', 'id' => $model->id],
		['class' => 'btn btn-primary']);}
	?>
	<?php 
		if (!Yii::$app->user->isGuest && $show_this_nav) {
		echo Html::a('Borrar', ['delete', 'id' => $model->id], [
		'class' => 'btn btn-danger',
		'data' => [
		'confirm' => Yii::t('app', 'Seguro que quieres eliminar este usuario?'),
		'method' => 'post',
		],
		]);}
	?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
		'attributes' => [
		['attribute'=>'profileLink', 'format'=>'raw'],
		//'username',
		//'auth_key',
		//'password_hash',
		//'password_reset_token',
		'email:email',
		'roleName',
		'statusName',
		'user_type_id',
		// lazyload 'status.status_name',
		'created_at',
		'updated_at',
		'id',
        ],
    ]) ?>

</div>
