<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\HomeworkSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->registerCssFile('@web/themes/grey/css/input.css');
$this->title = 'Homeworks';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="homework-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'homework_name',
            'thema_id',

        ],
    ]); ?>
</div>
