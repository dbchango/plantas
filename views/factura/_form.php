<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Factura */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="factura-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_cliente')->textInput() ?>

    <?= $form->field($model, 'ci_cliente')->textInput() ?>

    <?= $form->field($model, 'fecha_factura')->textInput() ?>

    <?= $form->field($model, 'id_detalle_factura')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'subtotal_factura')->textInput() ?>

    <?= $form->field($model, 'iva_factura')->textInput() ?>

    <?= $form->field($model, 'total_factura')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
