<?php  
    use yii\helpers\Html;
    use yii\grid\GridView;
    use yii\widgets\DetailView;
    $this->title = 'Historial de Compras';
    $this->params['breadcrumbs'][] = $this->title;

?>


    <?php 
        $usuario = Yii::$app->user->identity->username;
        $hijo = "lol";
        echo $usuario;
        
    ?>



