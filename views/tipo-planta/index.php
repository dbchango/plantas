<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\TipoPlantaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tipo Plantas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tipo-planta-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Tipo Planta', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_tipo',
            'nombre_tipo',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
