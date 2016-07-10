<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Accesses */


$this->title = 'Добавить доступ';
$this->params['breadcrumbs'][] = ['label' => 'Список доступов', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="accesses-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
