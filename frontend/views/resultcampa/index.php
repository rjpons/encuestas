<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\ResultcampaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Resultcampas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="resultcampa-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Resultcampa', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'campo1',
            'campo2',
            'campo3',
            'campo4',
            //'campo5',
            //'campo6',
            //'campo7',
            //'texto1:ntext',
            //'texto2:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
