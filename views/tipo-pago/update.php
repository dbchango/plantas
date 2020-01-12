<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TipoPago */

$this->title = 'Update Tipo Pago: ' . $model->id_tipo_pago;
$this->params['breadcrumbs'][] = ['label' => 'Tipo Pagos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_tipo_pago, 'url' => ['view', 'id' => $model->id_tipo_pago]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tipo-pago-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
