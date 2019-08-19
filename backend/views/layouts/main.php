<?php

/* @var $this \yii\web\View */
/* @var $content string */

use backend\assets\AppAsset;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use common\widgets\Alert;
use common\models\ValueHelpers;
use backend\assets\FontAwesomeAsset;
use backend\models\Referencias;

AppAsset::register($this);
FontAwesomeAsset::register($this);

?>

<?php $this->beginPage() ?>

<!DOCTYPE html>

<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
	<META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>

<body>
<?php $this->beginBody() ?>

	<div class="wrap">
    <?php


	$is_admin = ValueHelpers::getRoleValue('admin');
	

	if (!Yii::$app->user->isGuest){
		NavBar::begin([
		'brandLabel' => 'Panel de Control <i class="fa fa-plug"></i> admin',
		'brandUrl' => Yii::$app->homeUrl,
		'options' => [
		'class' => 'navbar-inverse navbar-fixed-top',
		],
	]);
	} else {
			
		NavBar::begin([
		'brandLabel' => 'Administracion <i class="fa fa-plug"></i>',
		'brandUrl' => Yii::$app->homeUrl,
		'options' => [
		'class' => 'navbar-inverse navbar-fixed-top',
		],
	]);
	}
	
	$menuItems = [
		['label' => 'Inicio', 'url' => ['/site/index']],
		];
		if (!Yii::$app->user->isGuest && Yii::$app->user->identity->role_id >= $is_admin) {
			$menuItems[] = ['label' => 'Alta de Usuarios', 'url' => ['user/create']];
			$menuItems[] = ['label' => 'Referencias', 'url' => ['referencias/index']];	
			}
			
			
	if (Yii::$app->user->isGuest) {
		$menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];
		} else {
			
        $menuItems[] = '<li>'
            . Html::beginForm(['/site/logout'], 'post')
            . Html::submitButton(
                'Logout (' . Yii::$app->user->identity->username . ')',
                ['class' => 'btn btn-link logout']
            )
            . Html::endForm()
            . '</li>';
		
		}
	
	echo Nav::widget([
		'options' => ['class' => 'navbar-nav navbar-right'],
		'items' => $menuItems,
		]);
		
	NavBar::end(); 

 
    ?>


	
		<div class="container">
		
			<?= Breadcrumbs::widget([
				'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
			]) ?>
			<?= Alert::widget() ?>


		<?= $content ?>
		</div>
	</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; <?= Html::encode(Yii::$app->name) ?> <?= date('Y') ?></p>

       <p class="pull-right">Powered by Telitar</p>
    </div>
</footer>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
