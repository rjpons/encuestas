<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\ReferenciasSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Referencias Generales';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="referencias-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
   //     'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

           //'id',
            'nombre',
            'detalle:ntext',
            'valor',

            ['class' => 'yii\grid\ActionColumn',
				'template'=>'{update}',			
			],
        ],
    ]); ?>
</div>
