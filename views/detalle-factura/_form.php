<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\DetalleFactura */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="detalle-factura-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'valor_venta')->textInput() ?>

    <?= $form->field($model, 'cantidad_venta')->textInput() ?>

    <?= $form->field($model, 'id_planta')->textInput() ?>

    <?= $form->field($model, 'id_factura')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
