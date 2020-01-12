<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Planta */

$this->title = 'Update Planta: ' . $model->id_planta;
$this->params['breadcrumbs'][] = ['label' => 'Plantas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_planta, 'url' => ['view', 'id' => $model->id_planta]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="planta-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
