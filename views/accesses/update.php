<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Accesses */

$this->title = 'Добавление доступа: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Страница с доступами', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Редактировать';
?>
<div class="accesses-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
