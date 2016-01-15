<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model \backend\components\BackendModel|\yii\db\ActiveRecord */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => $model->getTitle(),
]) . ' ' . ($model->hasAttribute('label') && $model->label ? $model->label : $model->id);
$this->params['breadcrumbs'][] = ['label' => $model->getTitle(), 'url' => ['index']];
$this->params['breadcrumbs'][] = [
    'label' => $model->hasAttribute('label') && $model->label ? $model->label : $model->id,
    'url' => ['view', 'id' => $model->id]
];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="panel panel-default">
    <div class="panel-heading">
        <h1 class="panel-title"><?= Html::encode($this->title) ?></h1>
    </div>

    <div class="panel-body">
        <?= $this->render('_form', [
            'model' => $model,
        ]) ?>
    </div>

</div>
