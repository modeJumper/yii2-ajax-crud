<?php

use yii\helpers\Html;

use yii\grid\GridView;
use yii\widgets\Pjax;
use yii\bootstrap\Modal;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $searchModel app\models\AccessesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

        $this->title = 'Страница с доступами';
        $this->params['breadcrumbs'][] = $this->title;
?>

<div class="site-index">

    <div class="jumbotron">
        <h1>Доступы и все такое!</h1>

        <p class="lead">Проще простого.</p>

        <p><a class="btn btn-lg btn-success" href="http://www.yiiframework.com">Get started with Yii</a></p>
    </div>

    <div class="body-content">

        <div class="row">

<div class="accesses-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::button('Добавить доступ', ['value'=>Url::to('index.php?r=accesses/create'),'class' => 'popupModal btn btn-success','id'=>'modalButton']) ?>
    </p>

<?php
            Modal::begin([
                'header'=>'<h4>Добавление доступа</h4>',
                'id'=>'modal',
                'closeButton' => [
                  'label' => 'Закрыть',
                  'class' => 'btn btn-danger btn-sm pull-right',
                ],
                'size' => 'modal-lg',
            ]);
            echo "<div id='modalContent'></div>";   
            Modal::end();
        ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'title',
            'url:ntext',
            'access:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
        </div>

    </div>
</div>
