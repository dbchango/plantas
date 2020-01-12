<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TipoPlanta */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tipo-planta-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nombre_tipo')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
