<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TipoPago */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tipo-pago-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nombre_tipo_pago')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
