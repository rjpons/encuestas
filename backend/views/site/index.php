<?php
use yii\helpers\Html;
use common\models\ValueHelpers;
/**
* @var yii\web\View $this
*/
$this->title = 'Telintar CRM ADMIN';
$is_admin = ValueHelpers::getRoleValue('Admin');
?>
<div class="site-index">
	<div class="jumbotron">
	<h1>Panel de Administración</h1>
	<p class="lead">
	 Bienvenido al panel de administración del Sistema CRM Telintar.
	</p>
	<p>
	<?php
	if (!Yii::$app->user->isGuest
	&&
	Yii::$app->user->identity->role_id >=
	$is_admin) {
		
		
	echo Html::a('Gestionar Usuarios', ['user/index'],
	['class' => 'btn btn-lg btn-success']);
	
	}
	?>
	</p>
	</div>
	<div class="body-content">
	<div class="row">
	<div class="col-lg-4">
	<h2>Perfiles</h2>
	<p>
	¿Necesitas revisar los perfiles? Este es el lugar para hacerlo.
	Estos son fáciles de administrar a través de la interfaz de usuario. Haga clic en el siguiente enlace para administrar los perfiles.
	</p>
	<p>
	<?php
	if (!Yii::$app->user->isGuest
	&& Yii::$app->user->identity->role_id >= $is_admin) {
	echo Html::a('Gestionar Perfiles', ['profile/index'],
	['class' => 'btn btn-default']);
	}
	?>
	</p>
	</div>
	<div class="col-lg-4">
	<h2>Estados</h2>
	<p>
	Módulo para administrar los estados.
	Puede agregar un nuevo estado si lo desea, simplemente haga clic en el enlace
	a continuación para comenzar.
	</p>
	<p>
	<?php
	if (!Yii::$app->user->isGuest
	&& Yii::$app->user->identity->role_id >= $is_admin) {
	echo Html::a('Gestionar Estados', ['status/index'],
	['class' => 'btn btn-default']);
	}
	?>
	</p>
	</div>
	<div class="col-lg-4">
	<h2>Tipos de Usuarios</h2>
	<p>
	Módulo para administrar los tipos de usuario. La interfaz de usuario es fácil de usar e intuitiva.
	Haga clic en el enlace de abajo para empezar.
	</p>
	<p>
	<?php
	if (!Yii::$app->user->isGuest
	&& Yii::$app->user->identity->role_id >= $is_admin) {
	echo Html::a('Gestionar Tipo de Usuario', ['user-type/index'],
	['class' => 'btn btn-default']);
	}
	?>
	</p>
	</div>
	</div>
	
	<div class="row">
	<div class="col-lg-4">
	<h2>Roles</h2>
	<p>
	Aquí es donde administras Roles. Puedes decidir quién es administrador del sistema. También puede
	agregar un nuevo rol (Acceso solo para SuperAdministrador).
	</p>
	<p>
	<?php
	if (!Yii::$app->user->isGuest
	&& Yii::$app->user->identity->role_id > $is_admin) {
	echo Html::a('Gestionar Tipo de Usuario', ['role/index'],
	['class' => 'btn btn-default']);
	}
	?>
	</p>
	</div>
	<div class="col-lg-4">
	<h2> </h2>
	<p>
	 
	</p>
	<p>
	<?php
	if (!Yii::$app->user->isGuest
	&& Yii::$app->user->identity->role_id >= $is_admin) {
    echo " ";
	}
	?>
	</p>
	</div>
	<div class="col-lg-4">
	<h2> </h2>
	<p>
 
	</p>
	<p>
	<?php
	if (!Yii::$app->user->isGuest
	&& Yii::$app->user->identity->role_id >= $is_admin) {
	  echo " ";
	}
	?>
	</p>
	</div>
	</div>
	</div>
</div>