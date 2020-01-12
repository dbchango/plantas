<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PlantaSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="planta-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_planta') ?>

    <?= $form->field($model, 'nombre_planta') ?>

    <?= $form->field($model, 'id_tipo') ?>

    <?= $form->field($model, 'precio_planta') ?>

    <?= $form->field($model, 'fecha_compra') ?>

    <?php // echo $form->field($model, 'vida_util') ?>

    <?php // echo $form->field($model, 'stock') ?>

    <?php // echo $form->field($model, 'cantidad_compra') ?>

    <?php // echo $form->field($model, 'precio_compra') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
