<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Cliente */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cliente-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nombre_cliente')->textInput() ?>

    <?= $form->field($model, 'ci_cliente')->textInput() ?>

    <?= $form->field($model, 'correo_cliente')->textInput() ?>

    <?= $form->field($model, 'telefono_cliente')->textInput() ?>

    <?= $form->field($model, 'direccion_cliente')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
