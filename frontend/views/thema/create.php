<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Thema */

$this->title = 'Create Thema';
$this->params['breadcrumbs'][] = ['label' => 'Themas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="thema-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
