<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\DetalleFacturaSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="detalle-factura-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_detalle') ?>

    <?= $form->field($model, 'valor_venta') ?>

    <?= $form->field($model, 'cantidad_venta') ?>

    <?= $form->field($model, 'id_planta') ?>

    <?= $form->field($model, 'id_factura') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
