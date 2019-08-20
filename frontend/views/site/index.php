<style type="text/css">
<!--

.portada{
   background: url(../../web/images/post.jpg) no-repeat fixed center;
   -webkit-background-size: cover;
   -moz-background-size: cover;
   -o-background-size: cover;
   background-size: cover;
   height: 100%;
   width: 100% ;
   text-align: center;
 
}

-->
</style>

<?php
use kartik\spinner\Spinner;
$tempo=true;
/* @var $this yii\web\View */

$this->title = 'Telintar - CRM';
?>

<div class="site-index">



    <div class="jumbotron">
        <h1>TELINTAR CRM</h1>

        <p class="lead">Aplicaciones CRM costumizadas para PYMES</p>
        
    </div>


    <div class="body-content">
    
        <?php if (Yii::$app->user->isGuest): ?>	
        <div align="center">
            <p><a class="btn btn-lg btn-success" href="index.php?r=site/login">Ingresar</a></p>
        </div>
         <?php else: ?>	

        <div class="row">
            <div class="col-lg-4">
                <h2>Alta de Campaña</a></h2>
                <p>Generar campañas a responder por los clientes</p>
                <p><a class="btn btn-default" href="index.php?r=campania/create">Nueva Campaña</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Ver Campañas</h2>
                <p>Muestra los resultados de las campañas generadas</p>
                <p><a class="btn btn-default" href="index.php?r=resultcampa/index">Ver Resultados</a></p>
            </div>
            <div class="col-lg-4">
                <h2>----------</h2>
                <p></p>
                <p></p>
            </div>
        </div>

        <?php endif; ?>   
        </div>
     

    </div>


</div>

