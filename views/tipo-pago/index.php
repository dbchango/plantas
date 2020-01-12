<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\TipoPagoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tipo Pagos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tipo-pago-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Tipo Pago', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_tipo_pago',
            'nombre_tipo_pago',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
