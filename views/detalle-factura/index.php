<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\DetalleFacturaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Detalle Facturas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="detalle-factura-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Detalle Factura', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_detalle',
            'valor_venta',
            'cantidad_venta',
            'id_planta',
            'id_factura',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
