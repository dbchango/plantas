<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\FacturaSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="factura-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_factura') ?>

    <?= $form->field($model, 'id_cliente') ?>

    <?= $form->field($model, 'ci_cliente') ?>

    <?= $form->field($model, 'fecha_factura') ?>

    <?= $form->field($model, 'subtotal_factura') ?>

    <?php // echo $form->field($model, 'iva_factura') ?>

    <?php // echo $form->field($model, 'total_factura') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
