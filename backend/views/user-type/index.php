<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\UserTypeSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tipos de Usuarios';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-type-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

	<p>Los Tipos de usuarios se usan para clasificar el acceso a contenidos de acuerdo con un cobro por el acceso.  </p>
		
    <p>
        <?= Html::a('Alta de nuevo tipo', ['create'], ['class' => 'btn btn-success']) ?>
   </p>
   
   
   
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'user_type_name',
            'user_type_value',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
