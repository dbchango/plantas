<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\TipoPlanta;
use yii\helpers\ArrayHelper;
use yii\jui\DatePicker;

/* @var $this yii\web\View */
/* @var $model app\models\Planta */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="planta-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nombre_planta')->textInput() ?>

    <?= $form->field($model, 'id_tipo')->dropDownList(ArrayHelper::map(TipoPlanta::find()->all(),'id_tipo','nombre_tipo'),['prompt'=>'Seleccione...']) ?>

    <?= $form->field($model, 'precio_planta')->textInput() ?>

    <?= $form->field($model, 'fecha_compra')->textInput() ?>

    <?= $form->field($model, 'vida_util')->textInput() ?>

    <?= $form->field($model, 'stock')->textInput() ?>

    <?= $form->field($model, 'cantidad_compra')->textInput() ?>

    <?= $form->field($model, 'precio_compra')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
